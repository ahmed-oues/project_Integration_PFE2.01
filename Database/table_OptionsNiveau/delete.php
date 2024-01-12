<?php
include 'connection_db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $option = $_POST['option'];

    $sql = "DELETE FROM OptioNiveau WHERE Option='$option'";

    if (mysqli_query($conn, $sql)) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>
