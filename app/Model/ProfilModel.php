<?php
namespace App\Model;

use PDO;
use PDOException;

class ProfilModel
{

    private $userData = [];
    public function __construct($Id) {
        $this->userData = [
            'UserID' => $Id,
            'Nom' => 'Nom',
            'AdresseEmail' => 'AdresseEmail',
            'MotDePasse' => 'MotDePasse',
            'Image' => 'Image',
        ];
    }

    public function getUserData() {
        return $this->userData;
    }

    public function updateProfil($newData) {
        $this->userData['UserID'] = $newData['UserID'];
        $this->userData['Nom'] = $newData['Nom'];
        $this->userData['AdresseEmail'] = $newData['AsresseEmail'];
        $this->userData['MotDePasse'] = $newData['MotDePasse'];
        $this->userData['Image'] = $newData['Image'];
        // $this->userData['RoleID'] = $newData['RoleID'];

    }

public function deleteProfil()
{
    return $this->deleteUserFromDatabase($this->userData['UserID']);
}

private function deleteUser($userId)
{
    $database = [
        [
            'UserID' => 'UserID',
            'Nom' => 'Nom',
            'AdresseEmail' => 'AdresseEmail',
            'MotDePasse' => 'MotDePasse',
            'Image' => 'Image',
        ],
    ];

    
    $key = array_search($userId, array_column($database, 'UserID'));

    
    if ($key !== false) {
        unset($database[$key]);
        return true; 
    }

    return false; 
}

}