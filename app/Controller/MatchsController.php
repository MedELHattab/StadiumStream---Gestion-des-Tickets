<?php

namespace App\Controller;

use App\Model\MatchModel;

class MatchsController
{

    public function index() {
        $matchs = new MatchModel();
        $matchs = $matchs->readMatch();
        // var_dump($matchs);
        include "../app/View/dashboard/matchs/matchs.php";
    }

    public function index1()
    {
        $name = $_GET["name"];
        $matchs = new MatchModel();
        $matchs = $matchs->search($name);
        echo json_encode($matchs);
    }
    
  
}