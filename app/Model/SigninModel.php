<?php

namespace App\Model;

use PDOException;

class Signin extends Crud
{
    

    public function authenticateUser($email, $password)
    {
        try {
          
            $tableName = "users"; 
            $query = "SELECT * FROM $tableName WHERE email = :email AND password = :password";

            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(":email", $email, \PDO::PARAM_STR);
            $stmt->bindParam(":password", $password, \PDO::PARAM_STR);
            $stmt->execute();

            $user = $stmt->fetch(\PDO::FETCH_ASSOC);

            if ($user) {
                // Authentication successful
                echo "User authenticated successfully!";
                return $user;
            } else {
                // Authentication failed
                echo "Invalid email or password.";
                return null;
            }

        } catch (PDOException $e) {
            echo "Error authenticating user: " . $e->getMessage();
            return null;
        }
    }
}
