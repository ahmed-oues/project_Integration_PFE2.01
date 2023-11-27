<?php
include("db_connection.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['supp'])) {
        if (isset($_POST['Option']) && isset($_POST['Departement'])) {
            $option = $_POST['Option'];
            $departement = $_POST['Departement'];

            $sql = "DELETE FROM Options WHERE `Option` = ? AND `Departement` = ?";
            $stmt = $conn->prepare($sql);
            $stmt->bind_param("ss", $option, $departement);

            if ($stmt->execute()) {
                header("Location:home.php");
            } else {
                echo "Error deleting record: " . $stmt->error;
            }
            $stmt->close();
        } else {
            echo "Option and Departement are not set in the POST request.";
        }
    }
}
$conn->close();
