<?php
$host = 'localhost';
$user = 'user';
$password = 'user';
$db = 'Scolarite';

try {
    $idcom = new PDO("mysql:host=$host; dbname=$db", $user, $password);
    $idcom->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $CodeDep = $_POST['CodeDep'];
        $Departement = $_POST['Departement'];
        $Responsable = $_POST['Responsable'];
        $MatProf = $_POST['MatProf'];
        $DepartementARAB = $_POST['DepartementARAB'];

        // nchoufou ken record bel codedep eli atineh existe wela lee
        $checkSql = "SELECT COUNT(*) FROM Departements WHERE CodeDep = :CodeDep";
        $checkStmt = $idcom->prepare($checkSql);
        $checkStmt->bindParam(':CodeDep', $CodeDep, PDO::PARAM_STR);
        $checkStmt->execute();
        $recordCount = $checkStmt->fetchColumn();

        if ($recordCount > 0) {
           
            $updateSql = "UPDATE Departements 
                SET Département = :Departement, Responsable = :Responsable, MatProf = :MatProf, DepartementARAB = :DepartementARAB
                WHERE CodeDep = :CodeDep";

            $stmt = $idcom->prepare($updateSql);

            $stmt->bindParam(':CodeDep', $CodeDep, PDO::PARAM_STR);
            $stmt->bindParam(':Departement', $Departement, PDO::PARAM_STR);
            $stmt->bindParam(':Responsable', $Responsable, PDO::PARAM_STR);
            $stmt->bindParam(':MatProf', $MatProf, PDO::PARAM_STR);
            $stmt->bindParam(':DepartementARAB', $DepartementARAB, PDO::PARAM_STR);

            $stmt->execute();
            echo 'Mise à jour réussie!';
        } else {
            echo 'Le CodeDep nexiste pas dans la base de données.';
        }
    }
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
    exit();
}
?>
