<?php 
$serverName="localhost";
$user="user";
$pwd="user";
$db="Scolarite";


$conn= new mysqli($serverName, $user ,$pwd ,$db);


if ($conn->connect_error) {
    die("connection failed:" .$conn->connect_error);
}


?>