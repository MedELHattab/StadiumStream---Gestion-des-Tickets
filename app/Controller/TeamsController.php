<?php

namespace App\Controller;

use App\Model\TeamModel;

class TeamsController
{
    public function index()
    {
 
    }

    public function addteam()
    {
        include "../app/View/dashboard/addteam.php";
    }
    // Add a team to the database
    public function create()
    {
   
    }
}
