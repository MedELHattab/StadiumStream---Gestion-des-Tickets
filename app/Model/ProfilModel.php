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
            'Image'=>'Image',
            'RoleID'=>'RoleID'
        ];
    }

    public function getUserData() {
        return $this->userData;
    }

    public function updateProfil($newData) {
        $this->userData['UserID'] = $newData['UserID'];
        $this->userData['Nom'] = $newData['Nom'];
        $this->userData['AsresseEmail'] = $newData['AsresseEmail'];
        $this->userData['MotDePasse'] = $newData['MotDePasse'];
        $this->userData['Image'] = $newData['Image'];
        $this->userData['RoleID'] = $newData['RoleID'];

    }
}
