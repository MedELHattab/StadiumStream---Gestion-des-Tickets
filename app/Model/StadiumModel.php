<?php

namespace App\Model;

use PDO;
use PDOException;

class StadiumModel extends Crud
{
    public function readTeam()
    {
        return $this->read('stades');
    }
    
    public function addStadium($data)
    {
     $tableName = 'stades';
     var_dump($data);
    $this->create($tableName, $data);
 }
    
}