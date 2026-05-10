<?php

declare(strict_types=1);

namespace app\Repository;

use PDO;

final class GuestbookRepository
{
    public function __construct(private readonly PDO $connection)
    {
    }

    /**
     * @return array<int, array{id:int, username:string, email:?string, message:string, created_at:string}>
     */
    public function latest(int $limit = 20): array
    {
        $statement = $this->connection->prepare(
            'SELECT id, username, email, message, created_at
             FROM guestbook_entries
             ORDER BY created_at DESC, id DESC
             LIMIT :limit'
        );
        $statement->bindValue(':limit', $limit, PDO::PARAM_INT);
        $statement->execute();

        return $statement->fetchAll();
    }

    /**
     * @param array{name:string, email:?string, message:string, ip_address:string, user_agent:string} $data
     */
    public function create(array $data): int
    {
        $statement = $this->connection->prepare(
            'INSERT INTO guestbook_entries (username, email, message, ip_address, user_agent)
             VALUES (:username, :email, :message, :ip_address, :user_agent)'
        );

        $statement->execute([
            ':username' => $data['name'],
            ':email' => $data['email'],
            ':message' => $data['message'],
            ':ip_address' => $data['ip_address'],
            ':user_agent' => $data['user_agent'],
        ]);

        return (int) $this->connection->lastInsertId();
    }
}
