<?php

namespace App\Controller;
use App\Model\StadiumModel;

class MarketplaceController
{
    public function index()
    {
        $stadiums = new StadiumModel();
        $stadiums = $stadiums->readStadium();
        include '../app/View/marketplace.php';
    }
}