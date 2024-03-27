<?php

declare(strict_types=1);

namespace Mechanix\Models;

use PDO;
use PDOException;
use Mechanix\Exceptions\StorageException;


class AbstractModel
{
    protected PDO $conn;

    public function __construct(array $configuration)
    {
        try {
            $this->createConnection($configuration);
        } catch (PDOException $e) {
            print_r($e);
        }
    }

    public function createConnection(array $configuration): void
    {
        $dsn = "mysql:dbname={$configuration['database']};host={$configuration['host']}";

        $this->conn = new PDO($dsn, $configuration['user'], $configuration['password'], [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);
    }
}
