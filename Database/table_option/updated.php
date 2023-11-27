<?php 
include("db_connection.php");

    if (isset($_POST['update'])) {
        $option = isset($_POST['Option']) ? $_POST['Option'] : null;
        $departement = isset($_POST['Departement']) ? $_POST['Departement'] : null;
        $optionAraB = isset($_POST['OptionAraB']) ? $_POST['OptionAraB'] : null;
        $codeOption = isset($_POST['CodeOption']) ? $_POST['CodeOption'] : null;

        // Update the existing record
        $sql = "UPDATE Options SET `OptionAraB` = ?, `CodeOption` = ? WHERE `Option` = ? AND `Departement` = ?";
        $stmt = $conn->prepare($sql);
        $stmt->bind_param("siss", $optionAraB, $codeOption, $option, $departement);
        $stmt->execute();

        header("Location: home.php");
        exit();
    }

    $conn->close();
    ?>