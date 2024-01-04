<?php
namespace App\Controller;
use App\Model\StadiumModel;

class AddStadiumController
{
    public function index()
    {
        $stadiums = new StadiumModel();
        $stadiums = $stadiums->readTeam();
        include "../app/View/dashboard/stadiums/stadiums.php";
    }

    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
           
            $data = [
                'NomStade' => $_POST['NomStade'],
                'Ville' => $_POST['Ville'],
                'Address' => $_POST['Address'],
                'Capacite' => $_POST['Capacite'],
                'Image' => isset($_POST['Image']) ? $_POST['Image'] : null,


            ];


            $stad = new  StadiumModel();

            $stad->addStadium($data);

            header('Location: ../stadiums');
            exit();   
        }
    }
}

