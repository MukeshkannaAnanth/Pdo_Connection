<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "custom_laravel_auth";

$dsn = "mysql:host=$servername;dbname=$dbname;charset=UTF8";
try {
    $db = new PDO($dsn, $username, $password);
    echo "Connection Successfully";
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}



?>