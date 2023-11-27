<?php 
include("db_connection.php");

    if (isset($_POST['update'])) {
        $option = $_POST['Option'];
        $departement = $_POST['Departement'];
        $optionAraB = $_POST['OptionAraB'];
        $codeOption = $_POST['CodeOption'];

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