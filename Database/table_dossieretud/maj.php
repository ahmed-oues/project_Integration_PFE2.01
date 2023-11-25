<?php
$servername = "localhost";
$username = "user";
$password = "user";
$dbname = "Scolarite";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $nomfichierpiece = $_POST["nomfichierpiece"];
    $Motif = $_POST["Motif"];
        $id = $_GET["id"];
        $sql = "UPDATE DossierEtud SET Motif = '$Motif' WHERE Ndossier = '$id';";
        $conn->exec($sql);
    
    
    header('Location: affichage.php');
exit;  
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

$conn = null;
?>
