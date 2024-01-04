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
                'Image' => $_FILE['Image'],
                'RoleID' => $_POST['RoleID'],
            ];

            $userModel->updateProfil($newData);

            $view = new UserProfileView();
            $view->showConfirmation();
        } else {
            $userData = $userModel->getUserData();
            $view = new UserProfileView();
            $view->showForm($userData);
        }
    }
}
