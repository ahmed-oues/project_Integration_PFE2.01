<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles/style.css">
    <title>Update Form</title>
</head>
<body>
<h1>Update Form:</h1>

<?php

include("db_connection.php");

if (isset($_GET['Option']) && isset($_GET['Departement'])) {

    $option = $_GET['Option'];
    $departement = $_GET['Departement'];

    $conn = new mysqli("localhost", "root", "", "Scolarite");
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = 'SELECT `Option`, `Departement`, `OptionAraB`, `CodeOption` FROM Options WHERE `Option` = ? AND `Departement` = ?';
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ss", $option, $departement);
    $stmt->execute();
    $stmt->bind_result($option, $departement, $optionAraB, $codeOption);
    if ($stmt->fetch()) {
        echo '<form action="updated.php" method="POST">
                <input type="hidden" name="CodeOption" value="' . $codeOption . '">
                <label for="Option">Option:</label>
                <input type="text" id="Option" name="Option" value="'. $option . '" readonly>
                <label for="Departement">Departement:</label>
                <input type="text" id="Departement" name="Departement" value="' . $departement . '" readonly>
                <label for="OptionAraB">OptionAraB:</label>
                <input type="text" id="OptionAraB" name="OptionAraB" value="' . $optionAraB . '" maxlength="10" required>
                <label for="codeOption">CodeOption:</label>
                <input type="number" min="1" id="codeOption" name="CodeOption" value="' . $codeOption . '">
                <button type="submit" name="update">Update</button>
            </form>';
    }
    else {
        echo "Record not found for Option: " . $option . " and Departement: " . $departement;
    }
    $stmt->close();
    $conn->close();
}
else {
    echo "Invalid or missing Option and Departement parameters.";
}
?>
</body>
</html>
