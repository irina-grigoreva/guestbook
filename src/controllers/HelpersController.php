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
}
