<?php

namespace App\Controller;

use App\Model\StadiumModel;

class HomeController
{
    // public function index() {
    //     include '../app/View/home.php';
    // }
    public function index()
    {

        $stadiums = new StadiumModel();
        $stadiums = $stadiums->readStadium();
        include '../app/View/home.php';
    }
}