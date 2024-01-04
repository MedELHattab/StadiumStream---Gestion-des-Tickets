<?php

namespace App\Controller;

use App\Model\MatchModel;
use App\Model\TeamModel;
use App\Model\StadiumModel;

class EditmatchController
{

    // Afficher form Edit
    public function read($id)
    {

        $teams = new TeamModel();
        $teams = $teams->readTeam();

        $stadiums = new StadiumModel();
        $stadiums = $stadiums->readStadium();

        include "../app/View/dashboard/matchs/editmatch.php";
    }


    public function edit($id)
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
            $matchs->updateMatch($data, $id);

            // Redirect to a different page after updating
            header('Location: /stadium_stream_Test/matchs');
            exit();
        }
    }
}