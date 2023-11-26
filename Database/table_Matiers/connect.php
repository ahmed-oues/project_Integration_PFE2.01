<?php


$servername = "localhost";

$username = "user"; 

$password = "user"; 

$dbname = "Scolarite";  

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {

    die("Connection failed: config.php " . $conn->connect_error);

}

?> 