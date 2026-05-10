<?php

declare(strict_types=1);

namespace app\Factory;

use app\models\Database;
use app\Repository\GuestbookRepository;
use app\Service\CsrfTokenService;
use app\Service\FlashBag;
use app\Validator\GuestbookEntryValidator;

final class ApplicationFactory
{
    private ?Database $database = null;
    private ?GuestbookRepository $guestbookRepository = null;

    public function guestbookRepository(): GuestbookRepository
    {
        if (!$this->guestbookRepository instanceof GuestbookRepository) {
            $this->guestbookRepository = new GuestbookRepository($this->database()->getConnection());
        }

        return $this->guestbookRepository;
    }

    public function validator(): GuestbookEntryValidator
    {
        return new GuestbookEntryValidator();
    }

    public function csrfTokenService(): CsrfTokenService
    {
        return new CsrfTokenService();
    }

    public function flashBag(): FlashBag
    {
        return new FlashBag();
    }

    private function database(): Database
    {
        if (!$this->database instanceof Database) {
            $this->database = new Database();
        }

        return $this->database;
    }
}
