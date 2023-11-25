<?php
// Connexion à la base de données MySQL
$servername = "localhost"; // Remplacez par le nom de votre serveur MySQL
$username = "user"; // Remplacez par votre nom d'utilisateur MySQL
$password = "user"; // Remplacez par votre mot de passe MySQL
$dbname = "Scolarite"; // Remplacez par le nom de votre base de données MySQL

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Récupération des données du formulaire
    $Ndossier = $_GET['Ndossier'];


    // Requête SQL pour insérer les données dans la table DossierEtud
    $sql = "delete from DossierEtud where Ndossier=$Ndossier ";
    $image_path = "./uploads/" . $_GET['nom'];
    unlink($image_path);
    $conn->exec($sql);
    header('Location: affichage.php');
    exit;  
} catch(PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

$conn = null;
?>
