<?php


$hostname = "localhost";
$username = "user";
$password = "user";
$database = "Scolarite";


$con = new mysqli($hostname, $username, $password, $database);

if (!$con) {
    echo "Vous n'êtes pas connecté à la base de données";
    die(mysqli_error($con));
} else {
    //echo "Connecté à la base de données";
}
