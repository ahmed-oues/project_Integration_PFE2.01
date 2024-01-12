<?php
$host="localhost";
$user="user";
$password="user";
$db="Scolarite";
try
{
    
    $idcon = new PDO("mysql:host=$host;dbname=$db",$user,$password);
    $idcon->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch(PDOException $e)
{
    echo("ERReur :".$e->getMessage());exit();
}
?>