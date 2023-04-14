<?php

namespace App;

use PDO;
use PDOException;

class Database
{
    // Contructeur
    public function __construct(
        private string $host = 'localhost',
        private string $database = 'blog',
        private string $username = 'jeremy',
        private string $password = 'toor')
    {}

    // Methods
    public function getPdo(): PDO
    {
        try {
            $pdo = new PDO(
                'mysql:host=' . $this->host . ';dbname=' . $this->database,
                $this->username,
                $this->password);

            return $pdo;
        } catch (PDOException $error) {
            var_dump($error);
            die();
        }
    }
}