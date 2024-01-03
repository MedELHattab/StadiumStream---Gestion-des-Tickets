<?php

namespace App\Model;

use PDO;
use PDOException;
use Symfony\Component\VarDumper\VarDumper;

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
//    public function deleteTeam($id)
//     {
//         $tableName = 'EquipesNationales';
//         $this->delete($tableName, $id);
//         header('Location: ' . $_SERVER['HTTP_REFERER']);
//     }
public function deleteTeam($id)
    {
        $tableName = 'EquipesNationales';
        $this->delete($tableName, $id);
        header('Location: ../../teams');
    }


    public function getteamsById($id) {
        $dsn = 'mysql:host=localhost;dbname=africa_cup_of_nations;charset=utf8';
        $username = 'root';
        $password = '';
    
        try {
            $pdo = new PDO($dsn, $username, $password);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
            $query = $pdo->prepare("SELECT * FROM EquipesNationales WHERE id = :id");
            $query->execute(['id' => $id]);
    
            $user = $query->fetch(PDO::FETCH_ASSOC);
            return $user;
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
            return null;
        }
    }

    public function editteam($tableName, $data, $id)
    {

        return $this->update($tableName, $data, $id);
    }

    // public function editTeam($data, $id)
    // {
    //     $tableName = 'EquipesNationales';
    //     // $redirect = URL_DIR . 'teams';
    //     $this->update($tableName, $data, $id);
    //     // header('Location: ../../teams');
    // }

    
    
}

