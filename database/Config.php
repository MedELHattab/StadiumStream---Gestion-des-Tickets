<?php 
require_once 'Connection.php';
USE config\Connection;

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$conn = new Connection($_ENV['HOST'],$_ENV['USER'], $_ENV['PASSWORD'], $_ENV['DATABASE']);