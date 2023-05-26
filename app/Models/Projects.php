<?php

namespace App\Models;

use PDO;
use App\Database;

class Projects{

    //Properties
    private PDO $pdo;

    //Constructor
    public function __construct(){
        $data = new Database();
        $this->pdo = $data ->getPdo();
    }

    //Methods
    public function getAll(){
        $query = $this->pdo->query('SELECT * FROM projects ORDER BY idProjets');
        $projects = $query->fetchAll();

        return $projects;
    }

    public function getOne(int $id){
        $query = $this->pdo->prepare('SELECT * FROM projects WHERE idProjets = ?');
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

    public function update($id){
        $query = $this->pdo->prepare("UPDATE projects SET name = :name, description = :description, deadline = :deadline, team_id = :team_id WHERE idProjets = '$id'");
        $query->execute([
            "name"=>$_POST['name'],
            "description"=>$_POST['description'],
            "deadline"=>$_POST['deadline'],
            "team_id"=>$_POST['teamid']
        ]);
    }

    public function delete($id){
        $query = $this->pdo->prepare("DELETE FROM projects WHERE idProjets = '$id'");
        $query->execute();
    }

}

