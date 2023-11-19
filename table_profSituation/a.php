<?php
include("conn.php");

if (
    isset($_POST["code"]) && is_numeric($_POST["code"]) &&
    isset($_POST["Sess"]) && is_numeric($_POST["Sess"]) &&
    isset($_POST["Situation"]) && !empty($_POST["Situation"]) &&
    isset($_POST["Grade"]) && !empty($_POST["Grade"])
) {
    $codeProf = $_POST["code"];
    $sess = $_POST["Sess"];
    $situation = $_POST["Situation"];
    $grade = $_POST["Grade"];

    // Check if the values exist in their respective tables
    $checkProfSql = "SELECT * FROM Prof WHERE MatriculeProf = '$codeProf'";
    $checkSessionSql = "SELECT * FROM Session WHERE Numero = '$sess'";
    $checkSituationSql = "SELECT * FROM Situation WHERE SituationName = '$situation'";
    $checkGradeSql = "SELECT * FROM Grades WHERE Grade = '$grade'";

    $profResult = mysqli_query($conn, $checkProfSql);
    $sessionResult = mysqli_query($conn, $checkSessionSql);
    $situationResult = mysqli_query($conn, $checkSituationSql);
    $gradeResult = mysqli_query($conn, $checkGradeSql);

    if (mysqli_num_rows($profResult) > 0 && mysqli_num_rows($sessionResult) > 0 && mysqli_num_rows($situationResult) > 0 && mysqli_num_rows($gradeResult) > 0) {
        // Check if the combination of CodeProf, Sess, and Situation is unique
        $checkDuplicateSql = "SELECT * FROM ProfSituation WHERE CodeProf = '$codeProf' AND Sess = '$sess' AND Situation = '$situation'";
        $checkDuplicateResult = mysqli_query($conn, $checkDuplicateSql);

        if (mysqli_num_rows($checkDuplicateResult) > 0) {
            echo "A record with the same CodeProf, Sess, and Situation already exists.";
        } else {
            // Insert the new record
            $insertSql = "INSERT INTO ProfSituation (CodeProf, Sess, Situation, Grade) VALUES ('$codeProf', '$sess', '$situation', '$grade')";

            if (mysqli_query($conn, $insertSql)) {
                echo "You are now registered";
                header("Location: home.php");
            } else {
                echo "Error: " . mysqli_error($conn);
            }
        }
    } else {
        echo "One or more values do not exist in their respective tables.";
    }
} else {
    echo "All fields are required.";
}

mysqli_close($conn);
?>
