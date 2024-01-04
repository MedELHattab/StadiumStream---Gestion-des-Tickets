<?php

namespace App\Controller;

use App\Model\MatchModel;
use App\Model\TeamModel;
use App\Model\StadiumModel;

class AddmatchController
{
    public function index()
    {
        $teams = new TeamModel();
        $teams = $teams->readTeam();

        $stadiums = new StadiumModel();
        $stadiums = $stadiums->readStadium();



        include "../app/View/dashboard/matchs/addmatch.php";
    }


    public function create()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Get form data
            $data = [
                'equipeDomicileID' => $_POST['equipeDomicile'],
                'equipeExterieurID' => $_POST['equipeExterieur'],
                'stadiumID' => $_POST['stadium'],
                'dateHeure' => $_POST['dateHeure'],
                'image' => isset($_POST['image']) ? $_POST['image'] : null
            ];


            $matchs = new MatchModel();

            $matchs->addMatch($data);

            header('Location: /stadium_stream_Test/matchs');
            exit();   // It's good practice to exit after a header redirect
        }
    }
}
