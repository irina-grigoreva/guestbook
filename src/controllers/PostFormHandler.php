<?php

namespace app\controllers;

use app\models\Database;

final class PostFormHandler
{
    /**
     * Обрабатывает POST и выводит JSON-ответ. Ничего не возвращает.
     */
    public function handle(): void
    {
        // 1) Сессия нужна для CSRF
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        // 2) Разрешаем только POST
        if (($_SERVER['REQUEST_METHOD'] ?? 'GET') !== 'POST') {
            $this->json(['ok' => false, 'errors' => ['method' => 'Метод не разрешён']], 405);
        }

        $post   = $_POST;
        $server = $_SERVER;
        $errors = [];

        // 3) CSRF
        // if (
        //     empty($_SESSION['csrf_token']) ||
        //     empty($post['csrf_token']) ||
        //     !hash_equals((string)$_SESSION['csrf_token'], (string)$post['csrf_token'])
        // ) {
        //     $errors['csrf'] = 'Неверный CSRF-токен.';
        // }

        // 4) Honeypot
        if (!empty($post['website'])) {
            $errors['spam'] = 'Spam detected.';
        }

        // 5) Данные
        //$title   = trim((string)($post['title']   ?? ''));
        $message = trim((string)($post['message'] ?? ''));
        $name    = trim((string)($post['name']    ?? ''));
        $email   = trim((string)($post['email']   ?? ''));

        // 6) Валидация
        // if ($title === '') {
        //     $errors['title']   = 'Укажите название.';
        // }
        if ($message === '') {
            $errors['message'] = 'Добавьте текст.';
        }
        if ($name === '') {
            $errors['name']    = 'Укажите имя.';
        }
        if ($email === '' || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $errors['email'] = 'Неверный email.';
        }
        // if (mb_strlen($title) > 200) {
        //     $errors['title'] = 'До 200 символов.';
        // }
        if (mb_strlen($name)  > 100) {
            $errors['name']  = 'До 100 символов.';
        }

        // 7) Если есть ошибки — возвращаем 400 и выходим
        if ($errors) {
            $this->json(['ok' => false, 'errors' => $errors, 'id' => null], 400);
        }

        // 8) Запись в БД
        try {
            $db   = new Database();
            $data = $db->addGuestbookMessage($message, $name, $email, $server);
            $this->json($data, 200);
        } catch (\Throwable $e) {
            $this->json(['ok' => false, 'errors' => ['db' => 'Ошибка']], 500);
        }
    }

    public function delete(): void
    {
        // 1) Сессия для CSRF (если нужно)
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }

        // 2) Разрешаем только DELETE (+ fallback через POST _method=DELETE или X-HTTP-Method-Override)
        $method = $_SERVER['REQUEST_METHOD'] ?? 'GET';
        $override = ($_POST['_method'] ?? '') === 'DELETE'
            || (($_SERVER['HTTP_X_HTTP_METHOD_OVERRIDE'] ?? '') === 'DELETE');

        if (!($method === 'DELETE' || ($method === 'POST' && $override))) {
            $this->json(['ok' => false, 'errors' => ['method' => 'Метод не разрешён']], 405);
        }

        // 3) Парсим входящие данные (JSON / x-www-form-urlencoded / query string)
        $payload = [];
        $contentType = $_SERVER['CONTENT_TYPE'] ?? $_SERVER['HTTP_CONTENT_TYPE'] ?? '';

        // Если метод DELETE: тело доступно через php://input
        $raw = file_get_contents('php://input');

        if (stripos($contentType, 'application/json') !== false) {
            $payload = json_decode($raw ?: '[]', true) ?: [];
        } elseif (stripos($contentType, 'application/x-www-form-urlencoded') !== false) {
            parse_str($raw ?? '', $payload);
        }

        // Добавим данные из POST (на случай override) и из GET (id можно передать в query)
        if (! empty($_POST)) {
            $payload = $payload + $_POST;
        }
        if (! empty($_GET)) {
            $payload = $payload + $_GET;
        }

        // 4) Достаём параметры
        $id = isset($payload['id']) ? (int)$payload['id'] : 0;

        // 5) Валидация (+ опционально CSRF)
        $errors = [];
        if ($id <= 0) {
            $errors['id'] = 'Неверный id.';
        }

        if ($errors) {
            $this->json(['ok' => false, 'errors' => $errors], 400);
        }

        // 6) Удаление в БД
        try {
            $db = new Database();
            // Реализуйте этот метод как показано ранее (R::load + R::trash)
            $res = $db->deleteGuestbookMessage($id);

            if (!empty($res['ok'])) {
                // Можно вернуть 200 с JSON или 204 без тела
                $this->json(['ok' => true, 'id' => $id], 200);
            } else {
                $this->json(['ok' => false, 'errors' => ['not_found' => 'Запись не найдена']], 404);
            }
        } catch (\Throwable $e) {
            $this->json(['ok' => false, 'errors' => ['db' => 'Ошибка']], 500);
        }
    }

    /**
     * Унифицированная отправка JSON + завершение скрипта.
     */
    private function json(array $payload, int $statusCode = 200): void
    {
        http_response_code($statusCode);
        header('Content-Type: application/json; charset=utf-8');
        echo json_encode($payload, JSON_UNESCAPED_UNICODE);
        exit;
    }
}
