<?php

namespace App\Controller;

use App\Model\SigninModel; 

class SigninController
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' ) {
            
            $AdresseEmail = $_POST['AdresseEmail'];
            $MotDePasse = $_POST['MotDePasse'];


            $signinModel = new SigninModel();

            $user = $signinModel->authenticateUser($AdresseEmail, $MotDePasse);

            

            if ($user) {
                session_start();

                // Store user information in session variables
                $_SESSION['user_id'] = $user['id']; 
                $_SESSION['user_email'] = $user['AdresseEmail'];
                
                header("Location:./users");
                exit();
            } else {

                header("Location: ./signin?error=1");
                exit();
            }
        } else {
            // If the form is not submitted, include the sign-in view
            include("../app/View/Signin.php");
        }
    }
}
