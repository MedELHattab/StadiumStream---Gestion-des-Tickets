<?php
namespace App\Controller;
class EditstadiumController{
    public function index(){
        include "../app/View/dashboard/stadiums/editstadium.php";    }
    public function editstadium($tableName, $data, $id)
 {
 
     return $this->update($tableName, $data, $id);
 }
 public function edit($id)
 {
   
     $teamModel = new StadiumModel();
     $team = $teamModel->getstadiumById($id);
     include "../app/View/dashboard/teams/editteams.php";
 } 
}