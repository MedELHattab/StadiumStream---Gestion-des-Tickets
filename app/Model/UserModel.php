<?php

namespace App\Model;

use PDO;
use PDOException;

class UserModel extends Crud
{
    public function readUser()
    {
        try {
            $query = "SELECT * FROM users
            INNER JOIN  roles 
            ON users.RoleID = roles.RoleID
            ;";
            $stmt = $this->pdo->query($query);

            $records = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $records; // Return the fetched records
        } catch (PDOException $e) {
            echo "Error fetching records: " . $e->getMessage();
            return []; // Return an empty array in case of an error
        }
    }
    public function deleteUser($id)
    {
        $tableName = 'users';
        $this->delete($tableName, $id);
        header('Location: ../../users');
    }
    public function editUser($data, $id)
    {
        $tableName = 'users';
        $redirect = URL_DIR . 'users';
        $this->update($tableName, $data, $id);
        header("Location: $redirect");
    }
}
