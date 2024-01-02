<?php

namespace App\Controller;

use App\Model\TeamModel;

class TeamsController
{
    public function index()
    {
        $teams = new TeamModel();
        $teams = $teams->readTeam();
        include "../app/View/dashboard/teams/teams.php";
    }

    // public function delete($id)
    // {
    //     $teams = new TeamModel();
    //     $teams->deleteTeam($id);
    // }
    
    // public function create()
    // {

    // }

  
}