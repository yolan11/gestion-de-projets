<?php

namespace App\Controllers;

use App\Models\Tasks;

class TasksController{

    public function read(){
        $taskModel = new Tasks();
        $tasks = $taskModel->getAll();

        require __DIR__ . '/../../ressources/Tasks/tasks.php';
    }

}