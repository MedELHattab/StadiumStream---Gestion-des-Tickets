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

    // public function addTeam($data)
    // {
    //     $tableName = 'EquipesNationales';

    //     $this->create($tableName, $data);
    // }
    // public function deleteTeam($id)
    // {
    //     $tableName = 'EquipesNationales';
    //     $this->delete($tableName, $id);
    //     header('Location: ');
    // }
}
