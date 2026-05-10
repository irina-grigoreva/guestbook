<?php

declare(strict_types=1);

define('ROOT', dirname(__DIR__));
define('APP', ROOT . '/src');
define('CONFIG', ROOT . '/config');

function loadEnvFile(string $path): void
{
    if (!is_file($path)) {
        return;
    }

    $lines = file($path, FILE_IGNORE_NEW_LINES | FILE_SKIP_EMPTY_LINES);
    if ($lines === false) {
        return;
    }

    foreach ($lines as $line) {
        $line = trim($line);

        if ($line === '' || str_starts_with($line, '#') || !str_contains($line, '=')) {
            continue;
        }

        [$key, $value] = array_map('trim', explode('=', $line, 2));
        $value = trim($value, "\"'");

        if ($key !== '' && getenv($key) === false) {
            putenv($key . '=' . $value);
            $_ENV[$key] = $value;
            $_SERVER[$key] = $value;
        }
    }
}

loadEnvFile(ROOT . '/.env');

define('PATH', getenv('APP_URL') ?: 'http://localhost:8000');

$isProduction = getenv('APP_ENV') === 'production';
error_reporting(E_ALL);
ini_set('display_errors', $isProduction ? '0' : '1');
ini_set('log_errors', '1');

require_once ROOT . '/vendor/autoload.php';
