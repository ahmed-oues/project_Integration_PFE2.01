<?php
include("conn.php");

if (
    isset($_POST["CodeProf"]) && is_numeric($_POST["CodeProf"]) &&
    isset($_POST["Sess"]) && is_numeric($_POST["Sess"]) &&
    isset($_POST["Situation"]) && !empty($_POST["Situation"]) &&
    isset($_POST["Grade"]) && !empty($_POST["Grade"])
) {
    $codeProf = $_POST["CodeProf"];
    $sess = $_POST["Sess"];
    $situation = $_POST["Situation"];
    $grade = $_POST["Grade"];

    // Check if the specified Grade exists in the Grades table
    $checkGradeSql = "SELECT * FROM Grades WHERE Grade = '$grade'";
    $checkGradeResult = mysqli_query($conn, $checkGradeSql);

    if (mysqli_num_rows($checkGradeResult) > 0) {
        // Check if the combination of CodeProf, Sess, and Situation exists in ProfSituation
        $checkSql = "SELECT * FROM ProfSituation WHERE CodeProf = '$codeProf' AND Sess = '$sess' AND Situation = '$situation'";
        $checkResult = mysqli_query($conn, $checkSql);

        if (mysqli_num_rows($checkResult) > 0) {
            $updateSql = "UPDATE ProfSituation SET Grade = '$grade' WHERE CodeProf = '$codeProf' AND Sess = '$sess' AND Situation = '$situation'";

            if (mysqli_query($conn, $updateSql)) {
                echo "ProfSituation updated successfully";
                header("Location: home.php");
            } else {
                echo "Error updating: " . mysqli_error($conn);
            }
        } else { 
            echo "CodeProf or Sess or Situation does not exist.";
        }
    } else {
        echo "Grade '$grade' does not exist in the Grades table.";
    }
} else {
    echo "All fields are required.";
}

mysqli_close($conn);
?>
