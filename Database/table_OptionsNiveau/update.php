<?php
include 'connection_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $option = $_POST['option'];
    $niveau = $_POST['niveau'];

    $sql = "UPDATE OptioNiveau SET Niveau='$niveau' WHERE Option='$option'";

    if (mysqli_query($conn, $sql)) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
