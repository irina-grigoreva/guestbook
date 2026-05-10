<?php

declare(strict_types=1);

namespace app\models;

use PDO;
use PDOException;
use RuntimeException;

final class Database
{
    private ?PDO $connection = null;

    public function getConnection(): PDO
    {
        if ($this->connection instanceof PDO) {
            return $this->connection;
        }

        /** @var array{host:string, port:string, database:string, username:string, password:string} $config */
        $config = require dirname(__DIR__, 2) . '/config/database.php';
        $host = (string) $config['host'];
        $port = (string) $config['port'];
        $database = (string) $config['database'];
        $username = (string) $config['username'];
        $password = (string) $config['password'];

        $dsn = sprintf(
            'mysql:host=%s;port=%s;dbname=%s;charset=utf8mb4',
            $host,
            $port,
            $database
        );

        try {
            $this->connection = new PDO($dsn, $username, $password, [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
                PDO::ATTR_EMULATE_PREPARES => false,
            ]);
        } catch (PDOException $exception) {
            error_log($exception->getMessage());
            throw new RuntimeException('Database connection failed.');
        }

        return $this->connection;
    }
}
