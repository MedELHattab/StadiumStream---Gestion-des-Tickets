<?php

namespace App\Controller;

use App\Model\SignupModel;

class SignupController
{
    public function index()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Retrieve form data
            $email = filter_var($_POST["AdresseEmail"], FILTER_VALIDATE_EMAIL);
            $name = htmlspecialchars($_POST["Nom"]);
            $phone = htmlspecialchars($_POST["phone"]);
            $password = password_hash($_POST["MotDePasse"], PASSWORD_DEFAULT);

            // Create an instance of SignupModel
            $signupModel = new SignupModel();

            // Data to be inserted into the 'users' table
            $userData = [
                'AdresseEmail' => $email,
                'Nom' => $name,
                'phone' => $phone,
                'MotDePasse' => $password,
            ];

            // Call the createUser method in SignupModel to insert the user into the database
            $userCreated = $signupModel->createUser($userData);

            if ($userCreated) {
                header("Location: ./home");
                exit();
            } else {
                // Redirect to the signin page with an error parameter if there was an issue
                header("Location: ./signin?error=1");
                exit();
            }
        } else {
            // Load the signup view if the request method is not POST
            include("../app/View/Signup.php");
        }
    }
}
