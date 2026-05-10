<?php

declare(strict_types=1);

namespace app\Service;

final class FlashBag
{
    public function set(string $key, mixed $value): void
    {
        $this->startSession();
        $_SESSION['_flash'][$key] = $value;
    }

    public function get(string $key, mixed $default = null): mixed
    {
        $this->startSession();

        $value = $_SESSION['_flash'][$key] ?? $default;
        unset($_SESSION['_flash'][$key]);

        return $value;
    }

    private function startSession(): void
    {
        if (session_status() !== PHP_SESSION_ACTIVE) {
            session_start();
        }
    }
}
