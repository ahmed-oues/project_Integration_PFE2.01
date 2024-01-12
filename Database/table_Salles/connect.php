<?php
$servername = "localhost";
$username = "user";
$password = "user";
$database = "Scolarite";
$conn = new mysqli($servername,$username,$password,$database);

if ($conn->connect_error)
{
    die("Connection failed: "  . $conn->connect_error);
}

?>
