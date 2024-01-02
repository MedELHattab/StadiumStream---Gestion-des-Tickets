<?php

namespace App\Model;

use PDOException;

class SigninModel extends Crud
{
    

    public function authenticateUser($AdresseEmail, $MotDePasse)
    {
        try {
          
            $tableName = "users"; 
            $query = "SELECT * FROM $tableName WHERE AdresseEmail = :AdresseEmail AND MotDePasse = :MotDePasse";

            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(":AdresseEmail", $AdresseEmail, \PDO::PARAM_STR);
            $stmt->bindParam(":MotDePasse", $MotDePasse, \PDO::PARAM_STR);
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
?>
!