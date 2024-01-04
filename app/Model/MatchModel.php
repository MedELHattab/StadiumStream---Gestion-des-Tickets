<?php

namespace App\Model;

use PDO;
use PDOException;

class MatchModel extends Crud
{
    public function readMatch()
    {
        try {
            $query = "SELECT
            Matchs.MatchID ,
            EquipeDomicile.NomEquipe AS EquipeDomicile,
            EquipeExterieur.NomEquipe AS EquipeExterieur,
            Stades.NomStade,
            Matchs.DateHeure,
            Matchs.Image
        FROM
            Matchs
        INNER JOIN EquipesNationales AS EquipeDomicile ON Matchs.EquipeDomicileID = EquipeDomicile.TeamID
        INNER JOIN EquipesNationales AS EquipeExterieur ON Matchs.EquipeExterieurID = EquipeExterieur.TeamID
        INNER JOIN Stades ON Matchs.StadiumID = Stades.StadiumID;
        ";
            $stmt = $this->pdo->query($query);

            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $records; // Return the fetched records
        } catch (PDOException $e) {
            echo "Error fetching records: " . $e->getMessage();
            return []; // Return an empty array in case of an error
        }
    }

    public function addMatch($data)
    {
        try {
            $query = "INSERT INTO Matchs (EquipeDomicileID, EquipeExterieurID, StadiumID, DateHeure, Image) VALUES (:equipeDomicileID, :equipeExterieurID, :stadiumID, :dateHeure, :image)";

            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':equipeDomicileID', $data['equipeDomicileID']);
            $stmt->bindParam(':equipeExterieurID', $data['equipeExterieurID']);
            $stmt->bindParam(':stadiumID', $data['stadiumID']);
            $stmt->bindParam(':dateHeure', $data['dateHeure']);
            $stmt->bindParam(':image', $data['image']);

            $stmt->execute();

            return true; // Return true if the insertion is successful
        } catch (PDOException $e) {
            echo "Error adding match: " . $e->getMessage();
            return false; // Return false in case of an error
        }
    }

    public function search($name)
    {
        try {
            $query = "SELECT
            Matchs.MatchID,
            EquipeDomicile.NomEquipe AS EquipeDomicile,
            EquipeExterieur.NomEquipe AS EquipeExterieur,
            Stades.NomStade,
            Matchs.DateHeure,
            Matchs.Image
        FROM
            Matchs
        INNER JOIN EquipesNationales AS EquipeDomicile ON Matchs.EquipeDomicileID = EquipeDomicile.TeamID
        INNER JOIN EquipesNationales AS EquipeExterieur ON Matchs.EquipeExterieurID = EquipeExterieur.TeamID
        INNER JOIN Stades ON Matchs.StadiumID = Stades.StadiumID
        WHERE
            EquipeDomicile.NomEquipe LIKE '%$name%' OR  EquipeExterieur.NomEquipe LIKE '%$name%' ;
        ";
            $stmt = $this->pdo->query($query);

            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $records; // Return the fetched records
        } catch (PDOException $e) {
            echo "Error fetching records: " . $e->getMessage();
            return []; // Return an empty array in case of an error
        }
    }

    public function updateMatch($data, $id)
    {
        try {
            $update_arr = [];
            foreach ($data as $column => $value) {
                $update_arr[] = "$column = :$column";
            }
            $update_arr = implode(", ", $update_arr);

            $query = "UPDATE Matchs SET $update_arr WHERE MatchID = :id";

            $stmt = $this->pdo->prepare($query);

            // Bindez tous les paramètres dynamiquement
            foreach ($data as $column => $value) {
                $stmt->bindValue(":$column", $value);
            }

            $stmt->bindValue(":id", $id, PDO::PARAM_INT);
            $stmt->execute();

            echo 'The Match has been updated successfully!';
        } catch (PDOException $e) {
            echo "Error updating record: " . $e->getMessage();
        }
    }


    public function deleteMatch($id)
    {
        try {
            // $query = "UPDATE Matchs SET $update_arr WHERE MatchID = :id";

            // $stmt = $this->pdo->prepare($query);


            $query = "DELETE FROM Matchs WHERE MatchID = :id";

            // Prepare and execute the SQL statement
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(":id", $id, PDO::PARAM_INT);
            $stmt->execute();

            // Output a success message
            echo "Record deleted successfully!";
        } catch (PDOException $e) {
            // Handle errors
            echo "Error deleting record: " . $e->getMessage();
        }


        $tableName = 'Matchs';
        $this->delete($tableName, $id);
    }
}