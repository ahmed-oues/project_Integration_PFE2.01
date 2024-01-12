<?php
include 'connection_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $option = $_POST['option'];
    $niveau = $_POST['niveau'];

    $sql = "INSERT INTO OptioNiveau (Option, Niveau) VALUES ('$option', '$niveau')";

    if (mysqli_query($conn, $sql)) {
        echo "Record added successfully";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
