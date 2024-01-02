<?php

namespace App\Model;

use PDOException;

class User extends Crud
{
    private int $id;
    private string $name;
    private string $email;
    private int $age;

    /**
     * @param string $name
     * @param string $email
     * @param int $age
     * @param int|null $id
     */
    public function __construct(string $name, string $email, int $age, int $id = null)
    {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->age = $age;
    }

    public function getId(): int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }



    public function updateUser($tableName, $data, $id)
    {
        return $this->update($tableName, $data, $id);
    }

    public function addUser($tabel, $data)
    {
        return $this->create($tabel, $data);
    }

    public function deleteUser($tabel, $id)
    {

        return $this->delete($tabel, $id);
    }
}
