<?php

declare(strict_types=1);

namespace app\controllers;

use app\Factory\ApplicationFactory;
use Throwable;

final class PageController
{
    public function __construct(private readonly ApplicationFactory $factory = new ApplicationFactory())
    {
    }

    public function indexAction(): void
    {
        $flashBag = $this->factory->flashBag();
        $entries = [];
        $databaseError = null;

        try {
            $entries = $this->factory->guestbookRepository()->latest();
        } catch (Throwable $exception) {
            error_log($exception->getMessage());
            $databaseError = 'Guestbook entries are temporarily unavailable.';
        }

        $tpl = new TemplateLoader();
        $tpl->render('default', 'pages/home', [
            'title' => 'Guestbook',
            'entries' => $entries,
            'csrfToken' => $this->factory->csrfTokenService()->token(),
            'errors' => $flashBag->get('errors', []),
            'old' => $flashBag->get('old', []),
            'success' => $flashBag->get('success'),
            'databaseError' => $databaseError,
        ]);
    }
}
