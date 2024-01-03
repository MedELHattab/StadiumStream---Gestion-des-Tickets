<?php

namespace App\Model;

use PDO;
use PDOException;

class UserModel extends Crud
{
    public function readUser()
    {
        try {
            $query = "SELECT users.Nom,users.AdresseEmail,roles.RoleType FROM users
            INNER JOIN  roles 
            ON users.RoleID = roles.RoleID
            ;";
            $stmt = $this->pdo->query($query);

            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $records; // Return the fetched records
        } catch (PDOException $e) {
            echo "Error fetching records: " . $e->getMessage();
            return []; // Return an empty array in case of an error
        }
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