<?php

namespace App\Model;

use PDO;
use PDOException;

class TeamModel extends Crud
{
    public function readTeam()
    {
        return $this->read('EquipesNationales');
    }
    
    // public function addTeam($data)
    // {
    //     $tableName = 'EquipesNationales';

    //     $this->create($tableName, $data);
    // }
    // public function deleteTeam($id)
    // {
    //     $tableName = 'EquipesNationales';
    //     $this->delete($tableName, $id);
    //     header('Location: ');
    // }
}