<?php
include("db_connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['create'])) {
        $option = $_POST['Option'] ;
        $departement = $_POST['Departement'] ;
        $optionAraB = $_POST['OptionAraB'] ;
        $codeOption = $_POST['CodeOption'] ;

        // Check if the combination already exists
        $checkSql = "SELECT COUNT(*) FROM Options WHERE `Option` = ? AND `Departement` = ?";
        $checkStmt = $conn->prepare($checkSql);
        $checkStmt->bind_param("ss", $option, $departement);
        $checkStmt->execute();
        $checkStmt->bind_result($count);
        $checkStmt->fetch();
        $checkStmt->close();

        if ($count > 0) {
            echo "Cette Option Departement combination existe déjà.";
        } else {
            // Insert the new record
            $insertSql = "INSERT INTO Options (`Option`, `Departement`, `OptionAraB`, `CodeOption`) VALUES (?, ?, ?, ?)";
            $insertStmt = $conn->prepare($insertSql);
            $insertStmt->bind_param("sssi", $option, $departement, $optionAraB, $codeOption);
            $insertStmt->execute();

            header("Location: home.php");
            exit();
        }
    } 
}

$conn->close();
