<?php

namespace App\Controller;

use App\Model\UserModel;

class EditProfilController
{
    public function index()
    {
        include '../app/View/EditProfil.php';
    }

    public function editProfil($Id)
    {
        $userModel = new UserModel($Id);

        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $newData = [
                'UserID' => $Id,
                'Nom' => $_POST['Nom'],
                'AdresseEmail' => $_POST['AdresseEmail'],
                'MotDePasse' => $_POST['MotDePasse'],
                'Image' => $_FILES['Image'],
                'RoleID' => $_POST['RoleID'],
            ];

            $userModel->updateProfil($newData);

            echo "Profil mis à jour avec succès!";
        } else {
            $userData = $userModel->getUserData();

            
            include '../app/View/EditProfil.php';
        }
    }
    public function deleteProfil($Id)
    {
        $userModel = new UserModel($Id);

        
        $userModel->delete($Id);

        header('Location: index.php');
        exit();
    }
}

