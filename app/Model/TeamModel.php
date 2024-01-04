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
    
}