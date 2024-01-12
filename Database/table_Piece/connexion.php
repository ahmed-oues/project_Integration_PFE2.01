<?php
$servername = "localhost";  // Remplacez par votre nom de serveur MySQL
$username = "user";  // Remplacez par votre nom d'utilisateur MySQL
$password = "user";  // Remplacez par votre mot de passe MySQL
$dbname = "Scolarite";  // Remplacez par le nom de votre base de données

// Créer la connexion
$conn = new mysqli($servername, $username, $password, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}
?>
