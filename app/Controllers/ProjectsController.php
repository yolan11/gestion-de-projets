<?php

namespace App\Controllers;

use App\Models\Projects;

class ProjectsController{

    public function read(){
        $projectModel = new Projects();
        $projects = $projectModel->getAll();

        require __DIR__ . '/../../ressources/Projects/projects.php';
    }

    public function readone(int $id){
        $projectModel = new Projects();
        $project = $projectModel->getOne($id);

        require __DIR__ . '/../../ressources/Projects/projects.php';
    }

    public function create(){
        $projectModel = new Projects();
        $projectModel->create();

        header("location: /projects");
    }

    public function update($id){
        $projectModel = new Projects();
        $projectModel->update($id);

        header('location: /projects');
    }

    public function delete($id){
        $projectModel = new Projects();
        $projectModel->delete($id);

        header("location: /projects");
    }
}