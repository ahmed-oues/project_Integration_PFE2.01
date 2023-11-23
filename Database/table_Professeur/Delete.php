<?php
require 'db_connection.php'; 

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['matriculeProf'])) {
    $Matricule_Prof = $_POST['matriculeProf'];

    try {
        
        $sql = "DELETE FROM prof WHERE `Matricule Prof` = :matriculeProf";
        $stmt = $idcon->prepare($sql);
        $stmt->bindParam(':matriculeProf', $Matricule_Prof, PDO::PARAM_INT);
    
        if ($stmt->execute()) {
            header('Location: Read.php');
        } else {
            echo "Error: " . $stmt->errorInfo()[2];
        }
    } catch (PDOException $e) {
        echo "Database Error: " . $e->getMessage();
    }
} else {
    echo "Invalid request or missing 'matriculeProf' parameter.";
}
?>
