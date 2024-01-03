<?php

namespace App\Model;

use PDOException;

class SignupModel extends Crud
{
    public function createUser($data)
    {
        $tableName = 'users';
        try{
 $this->create($tableName, $data);
        return true;
        }catch(PDOException $e){
            
        }
       
    }
}
