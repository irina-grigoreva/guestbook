<?php

namespace app\controllers;

use app\models\Database;

class PageController
{
    protected function isLoggedIn(): bool
    {
        // return isset($_SESSION['user_id']);
        return true;
    }

    protected function renderPage(string $contentPage, string $titlePage, array $data = []): void
    {
        $tpl = new TemplateLoader();
        $tpl->render('default', $contentPage, array_merge([
            'title' => $titlePage,
        ], $data));
    }

    public function indexAction(): void
    {
        $db = new Database();

        $page     = isset($_GET['page']) ? (int)$_GET['page'] : 1;

        $filters = [
            'sort_email' => HelpersController::normDir($_GET['sort_email'] ?? null, ''),
            'sort_name'  => HelpersController::normDir($_GET['sort_name']  ?? null, ''),
            'sort_date'  => HelpersController::normDir($_GET['sort_date']  ?? null, 'DESC'), // DESC по умолчанию
        ];

        $data = $db->getGuestbookPage($page, $filters);

        $this->renderPage(
            'pages/home',
            'Добро пожаловать!',
            $data
        );
    }

    public function viewAction(int $id): void
    {
        $isLoggedIn = $this->isLoggedIn();
        $this->renderPage(
            'pages/single',
            'Добро пожаловать!',
            ['id' => $id]
        );
    }

    public function simplePage($page)
    {
        $allowedPages = ['login', 'add']; // защита от произвольных шаблонов

        if (! in_array($page, $allowedPages)) {
            throw new \Exception("Страница не найдена", 404);
        }

        $title = match ($page) {
            'login' => 'Логин',
            'add'   => 'Добавить запись',
            default => 'Страница',
        };

        $tpl = new TemplateLoader();
        $tpl->render('default', 'pages/' . $page, [
            'title' => $title,
        ]);
    }
}
