<?php
include("conn.php");

if (isset($_POST["CodeProf"]) && is_numeric($_POST["CodeProf"])) {
    $c = $_POST["CodeProf"];

   
    $checkSql = "SELECT * FROM profsituation WHERE CodeProf = '$c'";
    $checkResult = mysqli_query($conn, $checkSql);

    if (mysqli_num_rows($checkResult) > 0) {
       
        $deleteSql = "DELETE FROM profsituation WHERE CodeProf = '$c'";
        if (mysqli_query($conn, $deleteSql)) {
            echo "ProfSituation deleted successfully";
            header("Location: home.php"); 
        } else {   
            echo "Error deleting: " . mysqli_error($conn);
        }
    } else {
        echo "CodeProf does not exist.";
    }
} else {
    echo "A valid CodeProf is required.";
}

mysqli_close($conn);
?>
