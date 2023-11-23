<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>creation table departments </title>
</head>
<body>
<?php
$host="localhost";
$user="root";
$password="";
$db="scolarite";
try {
    
    $idcom = new PDO("mysql:host=$host; dbname=$db", $user, $password);
    $idcom->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $sql = "CREATE TABLE Departements(
        Département char(55) NOT NULL,
        Responsable char(50) NULL,
        MatProf char(10) NULL,
        DepartementARAB char(55) NULL,
        CodeDep char(2) NULL PRIMARY KEY,
    )";
    $idcom->exec($sql);
    echo 'Table bien créée !';

   
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
    exit();
    }

    
?>


    
</body>
</html>