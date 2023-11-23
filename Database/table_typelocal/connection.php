<?php 
$serverName="localhost";
$user="root";
$pwd="";
$db="Scolarite";


$conn= new mysqli($serverName, $user ,$pwd ,$db);


if ($conn->connect_error) {
    die("connection failed:" .$conn->connect_error);
}


?>