<?php
$host = 'localhost';
$user = 'root';
$password = '';
$db = 'scolarite';

try {
    $idcom = new PDO("mysql:host=$host; dbname=$db", $user, $password);
    $idcom->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if (isset($_POST['CodeDep'])) {
        $CodeDepToDelete = $_POST['CodeDep'];

        // nchoufou ken el variable inserer mawjouda fel base ou non 
        $checkSql = "SELECT COUNT(*) FROM Departements WHERE CodeDep = :CodeDepToDelete";
        $checkStmt = $idcom->prepare($checkSql);
        $checkStmt->bindParam(':CodeDepToDelete', $CodeDepToDelete, PDO::PARAM_STR);
        $checkStmt->execute();
        $recordCount = $checkStmt->fetchColumn();

        if ($recordCount > 0) {
            // ken el codedep mawjoud :
            $deleteSql = "DELETE FROM Departements WHERE CodeDep = :CodeDepToDelete";
            $stmt = $idcom->prepare($deleteSql);
            $stmt->bindParam(':CodeDepToDelete', $CodeDepToDelete, PDO::PARAM_STR);
            $stmt->execute();
            echo 'Departments supprimer avec Succès!';
        } else {
            echo 'Code nexiste pas dans la base';
        }
    } else {
        echo 'donnees non recu ';
    }
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
    exit();
}
?>
