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

    public function getGuestbookPage(int $page = 1, array $filters = [], int $perPage = 5): array
    {
        // Нормализация page/perPage
        $page    = max(1, $page);
        $perPage = max(1, min(100, $perPage));

        $allowed = [
            'sort_email' => ['col' => 'email',      'dir' => HelpersController::normDir($filters['sort_email'] ?? null, 'ASC')],
            'sort_name'  => ['col' => 'username',   'dir' => HelpersController::normDir($filters['sort_name']  ?? null, 'ASC')],
            'sort_date'  => ['col' => 'created_at', 'dir' => HelpersController::normDir($filters['sort_date']  ?? null, 'DESC')],
        ];

        // Сборка ORDER BY по приоритету (дату ставим первой)
        $orderParts = [];
        foreach (['sort_date', 'sort_name', 'sort_email'] as $k) {
            if (!empty($filters[$k])) {
                $orderParts[] = $allowed[$k]['col'] . ' ' . $allowed[$k]['dir'];
            }
        }
        if (!$orderParts) {
            $orderParts[] = 'created_at DESC';
        }
        $orderBy = ' ORDER BY ' . implode(', ', $orderParts);

        $total = (int) R::getCell('SELECT COUNT(*) FROM guestbook');

        $pages = (int) ceil(($total ?: 0) / $perPage);
        $pages = max(1, $pages);                  // чтобы не делить на 0 и была хотя бы 1 страница «пустая»
        if ($page > $pages) {
            $page = $pages;
        }

        $offset = ($page - 1) * $perPage;

        $sql    = $orderBy . ' LIMIT ? OFFSET ?';
        $params = [$perPage, $offset];

        // Достаём данные
        $items = R::findAll('guestbook', $sql, $params);
        $rows  = R::exportAll($items);

        // Метаданные пагинации
        $meta = [
            'page'     => $page,
            'perPage'  => $perPage,
            'total'    => $total,
            'pages'    => $pages,
            'hasPrev'  => $page > 1,
            'hasNext'  => $page < $pages,
        ];

        return ['posts' => $rows, 'meta' => $meta];
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
