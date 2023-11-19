    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php 
$host="localhost";
$user="root";
$password="";
$db="scolarite";
$DSN="mysql:host=$host;dbname=$db";
try
{
    $idcon=new PDO($DSN,$user,$password);
    $idcon->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql = "CREATE TABLE Jours (
        code_prof INT NOT NULL,
        Session CHAR(10) NULL,
        Jours CHAR(10) NULL,
        Seance CHAR(10) NULL,
        Annee_universaire CHAR(10) NULL,
        Semestre INT(10)  NULL
    )"; 
    
   // $idcon->exec($sql);
   
}
catch(PDOException $e)
{
    echo("Erreur connexion".$e->getMessage());
}



?>
</body>
</html>