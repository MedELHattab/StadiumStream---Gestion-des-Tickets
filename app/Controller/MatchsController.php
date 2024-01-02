<?php

namespace App\Controller;

use App\Model\MatchModel;

class MatchsController
{

    public function index() {
        $matchs = new MatchModel();
        $matchs = $matchs->readMatch();
        include "../app/View/dashboard/matchs/matchs.php";
    }
    
  
}