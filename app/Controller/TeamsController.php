<?php
namespace App\Controller;

use App\Model\TeamModel;

error_reporting(E_ALL);
ini_set('display_errors', 1);


class TeamsController 
{
    public function index()
    {
        $teams = new TeamModel();
        $teams = $teams->readTeam();
        include "../app/View/dashboard/teams/teams.php";
    }

    public function delete($id)
    {
        $teams = new TeamModel;
        $teams->deleteTeam($id);
    }
    
    public function edit($id)
    {
        // $teams = new TeamModel();
        // $team = $teams->getteamsById($id);
        $teamModel = new TeamModel();
        $team = $teamModel->getteamsById($id);
        include "../app/View/dashboard/teams/editteams.php";
    } 
  
    
    public function editTeam()
    {
        $teams = new TeamModel();
        $id = $_POST['id'];
        unset($_POST['id']);
        // $tableName = 'EquipesNationales';
        $teams->editteam('EquipesNationales', $_POST, $id);
        header('../app/View/dashboard/teams');
    }



//     public function editTeam()
// {
//     if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['id'])) {
//         $teams = new TeamModel();
//         $id = $_POST['id'];
//         unset($_POST['id']);
//         // $data = [
//         //     'NomEquipe' => $_POST['nom'],
//         //     'Entraîneur' => $_POST['coach'],
//         //     'NombreJoueurs' => $_POST['num_players']
//         // ];
//         $tableName = 'EquipesNationales';

//         $success = $teams->editteam($tableName, $data, $id);
//         if ($success) {
//             // Redirect upon successful update
//             header('Location: ../../teams');
//             exit();
//         } else {
//             // Handle failure
//             echo "Failed to update.";
//         }
//     } else {
//         echo "Invalid request.";
//     }
// }

}