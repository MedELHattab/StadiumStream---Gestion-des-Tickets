<?php

namespace App\Model;

use PDO;
use PDOException;

class UserModel extends Crud
{
     
    private $userData = [];
    public function readUser()
    {
        try {
            $query = "SELECT users.Nom,users.AdresseEmail,roles.RoleType FROM users
            INNER JOIN  roles 
            ON users.RoleID = roles.RoleID
            ;";
            $stmt = $this->pdo->query($query);

            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $records; 
        } catch (PDOException $e) {
            echo "Error fetching records: " . $e->getMessage();
            return []; 
        }
    }
    
    public function updateProfil($newData) {
        $this->userData['UserID'] = $newData['UserID'];
        $this->userData['Nom'] = $newData['Nom'];
        $this->userData['AdresseEmail'] = $newData['AdresseEmail'];
        $this->userData['MotDePasse'] = $newData['MotDePasse'];
        $this->userData['Image'] = $newData['Image'];
        // $this->userData['RoleID'] = $newData['RoleID'];

       parent::update('users', $this->userData, $newData['UserID']);
}
    
    public function update($tableName, $data, $id)
    {
        $tableName = 'users';

        $this->update($tableName, $this->userData);
    }
    public function esc($value) {
        return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
    }
    // public function deleteTeam($id)
    // {
    //     $tableName = 'EquipesNationales';
    //     $this->delete($tableName, $id);
    //     header('Location: ');
    // }
}