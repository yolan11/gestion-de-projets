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
        $query = $this->pdo->query('SELECT idusers, surname, name, email FROM users');
        $users = $query->fetchAll();

        return $users;
    }

    public function getOne(int $id)
    {
        $query = $this->pdo->prepare('SELECT idusers, surname, name FROM users WHERE id = ?');
        $query->execute([$id]);

        return $query->fetch();
    }

    public function create()
    {
        // Traitement des données
        $query = $this->pdo->prepare('INSERT INTO users (surname, name, email) VALUES (:surname, :name, :email);');
        $query->execute([
            'surname' => $_POST['surname'],
            'name' => $_POST['name'],
            'email' => $_POST['email'],
        ]);
    }

    public function delete(){
        //Traitement des données
        $query = $this->pdo->prepare('DELETE * FROM users WHERE idusers = :idusers;');
        $query->execute([
            'idusers' => $_POST['idusers']
        ]);
    }
}