<?php 
// Database configuration
$host = "localhost";
$user = "root";
$password = "";
$dbname = "test";
$dsn = "mysql:host={$host};dbname={$dbname}";

// Establishing database connection using PDO
$conn = new PDO($dsn, $user, $password);
$conn->exec("SET time_zone = '+08:00';");

?>