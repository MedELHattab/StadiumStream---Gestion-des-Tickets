<?php

namespace App\Controller;

use App\Model\SignupModel;

class SignupController
{
    public function index()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {
            // Retrieve form data
            $email = $_POST["AdresseEmail"];
            $name = $_POST["Nom"];
            $phone = $_POST["phone"];
            $password = password_hash($_POST["MotDePasse"], PASSWORD_DEFAULT); // Hash the password

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
