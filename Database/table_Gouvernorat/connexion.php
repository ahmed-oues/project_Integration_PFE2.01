<?php


$hostname = "localhost";
$username = "root";
$password = "";
$database = "scolarite";


$con = new mysqli($hostname, $username, $password, $database);

if (!$con) {
    echo "Vous n'êtes pas connecté à la base de données";
    die(mysqli_error($con));
} else {
    //echo "Connecté à la base de données";
}
