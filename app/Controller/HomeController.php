<?php 
namespace App\Controller;

use App\Model\MatchModel;

class HomeController {
    public function index() {
        $matchesModel = new MatchModel;
        $matches = $matchesModel->readMatch();
        include '../app/View/home.php';
    }

   
}
