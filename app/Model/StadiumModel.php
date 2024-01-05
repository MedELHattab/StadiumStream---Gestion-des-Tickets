<?php

namespace App\Model;

use PDO;
use PDOException;

class StadiumModel extends Crud
{
    public function readTeam()
    {
        return $this->read('stades');
    }
    
    public function addStadium($data)
    {
     $tableName = 'stades';
    //  var_dump($data);
    $this->create($tableName, $data);
 }
 

public function getstadiumById($id) {
    $dsn = 'mysql:host=localhost;dbname=africa_cup_of_nations;charset=utf8';
    $username = 'root';
    $password = '';

    try {
        $pdo = new PDO($dsn, $username, $password);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $query = $pdo->prepare("SELECT * FROM stades WHERE id = :id");
        $query->execute(['id' => $id]);

        $user = $query->fetch(PDO::FETCH_ASSOC);
        return $user;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
        return null;
    }
}

}