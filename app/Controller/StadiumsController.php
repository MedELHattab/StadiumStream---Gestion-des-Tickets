<?php

namespace App\Controller;

use App\Model\StadiumModel;

class StadiumsController
{
    public function index()
    {
        $stadiums = new StadiumModel();
        $stadiums = $stadiums->readTeam();
        include "../app/View/dashboard/stadiums/stadiums.php";
    }
    public function AddStadium(){
        include "../app/View/dashboard/stadiums/AddStadium.php";
    }

    public function createStadium(){
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            $data = [
                'StadiumID' => 19,
                'NomStade' => $_POST['NomStade'],
                'Ville' => $_POST['Ville'],
                'Address' => $_POST['Address'],
                'Capacite' => $_POST['Capacite'],
                // 'Image' => isset($_POST['Image']) ? $_POST['Image'] : null,
            ];

            $stad = new StadiumModel();

            $stad->addStadium($data);

            $this->index();
            exit();   
    }
}
}

