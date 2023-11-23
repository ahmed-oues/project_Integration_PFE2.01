<?php
$serveur = 'localhost';
$utilisateur = 'mhbm';
$motPasse = 'mhbm';
$db = 'Scolarite';

try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$db", $utilisateur, $motPasse);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Connexion à la base de données réussie.";
} catch (PDOException $e) {
    
    echo "Erreur de connexion : " . $e->getMessage();
}
?>
