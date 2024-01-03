<?php

namespace config;

use PDO;
use PDOException;
use Dotenv;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

class Connection
{
    private $dsn;
    private $host;
    private $db;
    private $username;
    private $password;
    protected PDO $pdo;

    public function __construct()
    {
        $this->host = $_ENV['HOST'];
        $this->db = $_ENV['DATABASE'];
        $this->username = $_ENV['USER'];
        $this->password = $_ENV['PASSWORD'];
        $this->connect();
    }

    public function connect()
    {
        try {
            $this->dsn = "mysql:host=$this->host;dbname=$this->db";
            $this->pdo = new PDO($this->dsn, $this->username, $this->password);
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            // return $this->pdo; // You may or may not return the PDO instance
            // if ($this->pdo) {
            //     echo "Connected to the $this->db database successfully!";
            // }
        } catch (PDOException $e) {
            echo "Error Connection: " . $e->getMessage();
        }
    }
}
