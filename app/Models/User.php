<?php

namespace App\Models;

use PDO;
use App\Database;

class User
{
    // Properties
    private PDO $pdo;

    // Constructor
    public function __construct()
    {
        $database = new Database();
        $this->pdo = $database->getPdo();
    }

    // Methods
    public function getAll()
    {
        $query = $this->pdo->query('SELECT id, firstname, lastname, email, created_at, role_id FROM users');
        $users = $query->fetchAll();

        return $users;
    }

    public function getOne(int $id)
    {
        $query = $this->pdo->prepare('SELECT id, firstname, lastname, email, created_at, role_id FROM users WHERE id = ?');
        $query->execute([$id]);

        return $query->fetch();
    }
}