<?php

namespace App\Model;

use PDOException;

class SignupModel extends Crud
{
    public function createUser($data)
    {
        $tableName = 'users';
        try{
 $this->signuser($tableName, $data);
        return true;
        }catch(PDOException $e){
            
        }
       
    }
}
