<?php

namespace App\Controller;

use App\Model\StadiumModel;

class StadiumsController
{
    public function index()
    {
        $stadiums = new StadiumModel();
        $stadiums = $stadiums->readStadium();
        include "../app/View/dashboard/stadiums/stadiums.php";
    }
}
