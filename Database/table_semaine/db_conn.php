<?php
$server = "localhost";
$username = "root";
$password = "";
$db_name = "scolarite";

$conn = mysqli_connect($server, $username, $password, $db_name);

if ($conn === false) {
    die("Error " . mysqli_connect_error());
}



?>

