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
}
