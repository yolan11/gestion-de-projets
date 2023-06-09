<?php

namespace App\Models;

use PDO;
use App\Database;

class Tasks
{
    // Properties
    private PDO $pdo;

    //Constructor

    public function __construct(){
        $database = new Database();
        $this->pdo = $database->getPdo();
    }

    //Methods

    public function getAll(){
        $query = $this->pdo->query('SELECT * FROM tasks ORDER BY idtasks');
        $tasks = $query->fetchAll();

        return $tasks;
    }

    public function getOne(int $id){
        $query = $this->pdo->prepare('SELECT * FROM tasks WHERE idtasks = ?');
        $query->execute([$id]);

        return $query->fetch();
    }

    public function create(){
        $name=$_POST['name'];
        $description=$_POST['description'];
        $deadline=$_POST['deadline'];
        $team=$_POST['team'];

        $query = $this->pdo->prepare("INSERT INTO projects (name, description, deadline, team_id) VALUES (:name, :description, :deadline, :team_id)");
        $query->execute([
            "name" => $name,
            "description" => $description,
            "deadline" => $deadline,
            "team_id" => $team
        ]);
    }

}