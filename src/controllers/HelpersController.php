<?php

namespace app\controllers;

class HelpersController
{
    public static function clientIp(array $server): string
    {
        foreach (['HTTP_CLIENT_IP', 'HTTP_X_FORWARDED_FOR', 'REMOTE_ADDR'] as $k) {
            if (!empty($server[$k])) {
                $ip = trim(explode(',', (string)$server[$k])[0]);

                // Приведение IPv6 localhost (::1) к IPv4 localhost
                if ($ip === '::1') {
                    return '127.0.0.1';
                }

                return $ip;
            }
        }
        return '0.0.0.0';
    }

    public static function normDir(?string $v, string $default = 'ASC'): string
    {
        $v = strtolower((string)$v);
        if ($v === 'asc') {
            return 'ASC';
        }
        if ($v === 'desc') {
            return 'DESC';
        }

        if ($default === '') {
            return '';
        }

        return strtoupper($default);
    }

    public static function urlWith(array $overrides = []): string
    {
        $qs = array_merge($_GET, $overrides);
        $qs = array_filter($qs, static fn($val) => $val !== '' && $val !== null);
        return '?' . http_build_query($qs);
    }
}
