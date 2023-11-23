<?php
$host = "localhost"; 
$username = "user";
$password = "user";
$database = "Scolarite";


$dsn = "mysql:host=$host;dbname=$database";
$options = array(
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
);

try {
    $conn = new PDO($dsn, $username, $password, $options);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}
// echo"conneted";
?>