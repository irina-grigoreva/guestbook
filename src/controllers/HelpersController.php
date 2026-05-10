<?php

declare(strict_types=1);

namespace app\controllers;

final class HelpersController
{
    /**
     * @param array<string, mixed> $server
     */
    public static function clientIp(array $server): string
    {
        foreach (['HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR'] as $key) {
            if (!empty($server[$key])) {
                $ip = trim(explode(',', (string) $server[$key])[0]);

                return $ip === '::1' ? '127.0.0.1' : $ip;
            }
        }

        return '0.0.0.0';
    }

    public static function escape(?string $value): string
    {
        return htmlspecialchars((string) $value, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
    }

    /**
     * @param array<string, mixed> $old
     */
    public static function old(string $key, array $old): string
    {
        return self::escape(isset($old[$key]) ? (string) $old[$key] : '');
    }
}
