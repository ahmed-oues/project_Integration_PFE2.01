<?php
include "db_conn.php";

$errorMessage = "";
$successMessage = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $DateDebut = $_POST["DateDebut"];
    $DateFin = $_POST["DateFin"];
    $Session = $_POST["Session"];

    $sql = "INSERT INTO semaine (DateDebut, DateFin, Session) VALUES ('$DateDebut', '$DateFin', '$Session')";

    $res = $conn->query($sql);

    if ($res) {
        $successMessage = "Semaine ajoutée avec succès";
    } else {
        $errorMessage = "Erreur lors de l'ajout de la semaine : " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Ajouter Semaine</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>
<body>
    <form action="create.php" method="post" onsubmit="return validateForm()">
        <div class="Semaine">
            <h2>Semaine</h2>
        </div>
        <table>
            <tr>
                <th><label for="DateDebut">Date de début :</label></th>
                <td><input type="date" name="DateDebut" id="DateDebut" onchange="validateDates()" required></td>
            </tr>
            <tr>
                <th><label for="DateFin">Date de fin :</label></th>
                <td><input type="date" name="DateFin" id="DateFin" onchange="validateDates()" required></td>
            </tr>
            <tr>
                <th><label for="Session">Session :</label></th>
                <td>
                    <input type="text" name="Session" id="Session" required>
                </td>
            </tr>
            <tr>
                <div class="boutton">
                    <td><input type="submit" value="Valider" name="submit"></td>
                    <td><a href="index.php">Accueil</a></td>
                    <td><input type="reset" value="Annuler" name="reset"></td>
                </div>
            </tr>
        </table>
    </form>
    <div>
        <?php
        if (!empty($errorMessage)) {
            echo "<p style='color: red;'>Erreur : $errorMessage</p>";
        } elseif (!empty($successMessage)) {
            echo "<p style='color: green;'>Success : $successMessage</p>";
        }
        ?>
    </div>
    <script>
        function validateDates() {
            var startDate = new Date(document.getElementById('DateDebut').value);
            var endDate = new Date(document.getElementById('DateFin').value);

            if (startDate > endDate) {
                alert("La date de début ne peut pas être postérieure à la date de fin.");
                document.getElementById('DateDebut').value = '';
                document.getElementById('DateFin').value = '';
            }
        }

        function validateForm() {
            validateDates(); 
            return true; 
        }
    </script>
</body>
</html