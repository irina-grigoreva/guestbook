<?php

namespace app\models;

use RedBeanPHP\R;
use app\controllers\HelpersController;

class Database
{
    public function __construct()
    {
        R::setup(
            'mysql:host=' . getenv('DB_HOST') . ';port=' . getenv('DB_PORT') . ';dbname=' . getenv('DB_DATABASE'),
            getenv('DB_USERNAME'),
            getenv('DB_PASSWORD')
        );
        R::ext('xdispense', fn($type) => \R::getRedBean()->dispense($type));
        R::freeze(false);
    }

    public function getAllGuestbookMessages(): array
    {
        return R::findAll('guestbook', 'ORDER BY created_at DESC');
    }

    public function getGuestbookPage(int $page = 1, int $perPage = 5, array $filters = []): array
    {
        $page    = max(1, $page);
        $perPage = max(1, min(100, $perPage));
        $offset  = ($page - 1) * $perPage;

        // Нормализация фильтров
        $filters['name']  = isset($filters['name'])  ? trim((string)$filters['name'])  : null;
        $filters['email'] = isset($filters['email']) ? mb_strtolower(trim((string)$filters['email'])) : null;
        $filters['ip']    = isset($filters['ip'])    ? trim((string)$filters['ip'])    : null;

        $where  = [];
        $params = [];

        if (!empty($filters['name'])) {
            $where[]  = 'username LIKE ?';
            $params[] = '%' . $filters['name'] . '%';
        }
        if (!empty($filters['email'])) {
            $where[]  = 'email LIKE ?'; // или email = ? если хотите точное совпадение
            $params[] = '%' . $filters['email'] . '%';
        }
        if (!empty($filters['ip'])) {
            $where[]  = 'ip_address = ?';
            $params[] = $filters['ip'];
        }

        $conditions = $where ? implode(' AND ', $where) : '';

        // total с учётом фильтров
        $total = (int) R::count('guestbook', $conditions, $params);

        // WHERE-часть для выборки
        $whereSql = $conditions ? 'WHERE ' . $conditions : '';

        // Лучше сортировать по id, если created_at не гарантирован
        $sql = "$whereSql ORDER BY id DESC LIMIT $offset, $perPage";

        $items = R::findAll('guestbook', $sql, $params);

        // Привести к обычному массиву (по желанию)
        $rows = array_values($items);

        $pages = (int) ceil($total / $perPage);

        return [
            'posts' => $rows,
            'meta'  => [
                'page'     => $page,
                'perPage'  => $perPage,
                'total'    => $total,
                'pages'    => $pages,
                'hasPrev'  => $page > 1,
                'hasNext'  => $page < $pages,
            ],
        ];
    }

    public function addGuestbookMessage($message, $name, $email, $server)
    {
        // Метаданные
        $ip        = HelpersController::clientIp($server);
        $userAgent = substr((string)($server['HTTP_USER_AGENT'] ?? ''), 0, 255);
        //$createdAt = \RedBeanPHP\R::isoDateTime(); // 'YYYY-MM-DD HH:MM:SS'

        try {
            R::begin();

            $entry = R::dispense('guestbook');
            $entry->message    = $message;
            $entry->username   = $name;
            $entry->email      = mb_strtolower($email);
            $entry->ip_address = $ip;
            $entry->user_agent = $userAgent;
            // $entry->created_at  = $createdAt;

            $id = (int) R::store($entry);
            R::commit();

            return ['ok' => true, 'errors' => [], 'id' => $id];
        } catch (\Throwable $e) {
            R::rollback();
            return ['ok' => false, 'errors' => ['db' => 'Ошибка БД'], 'id' => null];
        }
    }

    public function deleteGuestbookMessage($id)
    {
        try {
            R::begin();
            $entry = R::load('guestbook', $id);
            if ($entry->id) {
                R::trash($entry);
                R::commit();
                return ['ok' => true];
            } else {
                R::rollback();
                return ['ok' => false, 'error' => 'Запись не найдена'];
            }
        } catch (\Throwable $e) {
            R::rollback();
            return ['ok' => false, 'error' => 'Ошибка БД'];
        }
    }
}
