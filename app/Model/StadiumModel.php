<?php

namespace App\Model;

use PDO;
use PDOException;

class StadiumModel extends Crud
{
    public function readTeam()
    {
        return $this->read('Stades');
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