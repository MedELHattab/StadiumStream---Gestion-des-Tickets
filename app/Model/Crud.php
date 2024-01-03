<?php

namespace App\Model;

use config\Connection;
use PDO;
use PDOException;

class Crud extends Connection
{
    public function __construct()
    {
        parent::__construct();
    }


    public function read($tableName)
    {
        try {
            $query = "SELECT * FROM $tableName";
            $stmt = $this->pdo->query($query);

            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $records; // Return the fetched records
        } catch (PDOException $e) {
            echo "Error fetching records: " . $e->getMessage();
            return []; // Return an empty array in case of an error
        }
    }


    public function create($tableName, $data)
    {
        try {
            $columns = implode(", ", array_keys($data));
            $values = ":" . implode(", :", array_keys($data));

            $query = "INSERT INTO $tableName ($columns) VALUES ($values)";
            $stmt = $this->pdo->prepare($query);
            $stmt->execute($data);

            echo "Record added successfully!";
        } catch (PDOException $e) {
            echo "Error creating record: " . $e->getMessage();
        }
    }

    public function update($tableName, $data, $id)
    {
        try {
            $update_arr = [];
            foreach ($data as $column => $value) {
                $update_arr[] = "$column = :$column";
            }
            $update_arr = implode(", ", $update_arr);
            // $query = "UPDATE $tableName SET $update_arr WHERE id = :id";
            
            $query =  "UPDATE equipesnationales  SET NomEquipe = :NEquipe, Entraîneur = :Entraineur, NombreJoueurs = :NJoueurs WHERE id = :id";
       
      

// dump($update_arr);die();

            $data['id'] = $id;

            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':id', $id, PDO::PARAM_INT);
            $stmt->bindParam(':NEquipe', $data['NomEquipe']);
            $stmt->bindParam(':Entraineur', $data['Entraîneur']);
            $stmt->bindParam(':NJoueurs',$data['NombreJoueurs'], PDO::PARAM_INT);
        
            $stmt->execute();
            if ($stmt->execute()) {
                echo 'The publisher has been updated successfully!';
            }

            echo "Record updated successfully!";
        } catch (PDOException $e) {
            echo "Error updating record: " . $e->getMessage();
        }
    }

    public function delete($tableName, $id)
    {
        try {
            $query = "DELETE FROM $tableName WHERE ID = :id";

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
    }
}
