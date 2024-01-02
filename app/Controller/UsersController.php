<?php

namespace App\Controller;

use App\Model\UserModel;

class UsersController
{
    public function index()
    {
        $users = new UserModel();
        $users = $users->readUser();
        include "../app/View/dashboard/users/users.php";
    }
    public function delete($id)
    {
        $teams = new UserModel();
        $teams->deleteUser($id);
    }

    
    public function editUser(){
        $teams = new UserModel();
        $id = $_POST['id'];
        unset($_POST['id']);
        $teams->editUser($_POST, $id);
    }
}
