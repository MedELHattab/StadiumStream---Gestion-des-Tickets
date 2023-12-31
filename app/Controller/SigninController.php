<?php

namespace App\Controller;

use App\Model\Signin; 

class SigninController
{
    public function index()
    {
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['signin'])) {
            
            $email = $_POST['email'];
            $password = $_POST['password'];


            $signinModel = new Signin();

            // Call the signIn method
            $user = $signinModel->authenticateUser($email, $password);

            $signinController = new self();

            if ($user) {

                header("Location: /dashboard");
                exit();
            } else {

                header("Location: /signin?error=1");
                exit();
            }
        } else {
            // If the form is not submitted, include the sign-in view
            include("../app/View/Signin.php");
        }
    }
}
