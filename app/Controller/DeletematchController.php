<?php

namespace App\Controller;

use App\Model\MatchModel;


class DeletematchController
{


    public function delete($id)
    {

        $matchs = new MatchModel();
        $matchs->deleteMatch($id);

        header('Location: /stadium_stream_Test/matchs');
        exit();   // It's good practice to exit after a header redirect



    }
}
