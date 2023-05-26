<?php

namespace App\Controllers;

use App\Models\User;

class UserController
{
    public function index()
    {
        $userModel = new User();
        $users = $userModel->getAll();

        require __DIR__ . '/../../ressources/users/users.php';
    }

    public function show(int $id)
    {
        $userModel = new User();
        $user = $userModel->getOne($id);

        require __DIR__ . '/../../ressources/users/user.php';
    }

    public function create()
    {
        require __DIR__ . '/../../ressources/users/NewUser.php';
    }

    public function store()
    {
        $userModel = new User();
        $userModel->create();

        header('location: /users');
    }

    public function delete($id){
        $userModel= new User();
        $userModel->delete($id);

        header('location: /users');
    }
}