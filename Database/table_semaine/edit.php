<?php
include "db_conn.php";

$NumSem = "";
$DateDebut = "";
$DateFin = "";
$Session = "";
$errorMessage = "";
$successMessage = "";

if (isset($_GET['NumSem'])) {
    $NumSem = $_GET['NumSem'];
} else {
    $errorMessage = "Error: NumSem not provided";
}

if ($NumSem) {
    $sql = "SELECT * FROM semaine WHERE NumSem = $NumSem";
    $res = $conn->query($sql);

    if ($res) {
        $row = $res->fetch_assoc();

        $DateDebut = $row["DateDebut"];
        $DateFin = $row["DateFin"];
        $Session = $row["Session"];
    } else {
        $errorMessage = "Invalid query: " . $conn->error;
    }
}

if (isset($_POST['update'])) {
    $NumSem = $_POST['NumSem'];
    $DateDebut = $_POST['DateDebut'];
    $DateFin = $_POST['DateFin'];
    $Session = $_POST['Session'];

    // Validate dates
    $startDate = new DateTime($DateDebut);
    $endDate = new DateTime($DateFin);
    $daysDifference = $startDate->diff($endDate)->days;

    if ($daysDifference > 7) {
        $errorMessage = "Erreur : La période entre la date de début et la date de fin ne peut pas dépasser 7 jours.";
    }elseif($daysDifference < 7){
        $errorMessage = "Erreur : La période entre la date de début et la date de fin ne peut pas etre inférieur à 7 jours.";

    }else {
        // Proceed with the update
        $sql2 = "UPDATE semaine SET DateDebut='$DateDebut', DateFin='$DateFin', Session='$Session' WHERE NumSem = $NumSem";
        $res = $conn->query($sql2);

        if ($res) {
            $successMessage = "Data updated successfully";
        } else {
            $errorMessage = "Error updating data: " . $conn->error;
        }
    }
}
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Edit Semaine</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
    <script src='main.js'></script>
</head>

<body>
    <form action="edit.php" method="post" onsubmit="return validateForm()">
        <input type="hidden" name="NumSem" value="<?php echo $NumSem; ?>">
        <div class="Semaine">
            <h2>Semaine</h2>
        </div>
        <table>
            <tr>
                <th><label for="NumSem">Numéro de la semaine :</label></th>
                <td><input type="text" name="NumSem" id="NumSem" required value="<?php echo $NumSem; ?>" readonly></td>
            </tr>
                <tr>
                <th><label for="DateDebut">Date de début :</label></th>
                <td><input type="date" name="DateDebut" id="DateDebut" value="<?php echo date('Y-m-d', strtotime($DateDebut)); ?>"></td>
            </tr>
            <tr>
                <th><label for="DateFin">Date de fin :</label></th>
                <td><input type="date" name="DateFin" id="DateFin" value="<?php echo date('Y-m-d', strtotime($DateFin)); ?>"></td>
            </tr>
            <tr>
            <th><label for="Session">Session :</label></th>
            <td>
                <input type="text" name="Session" id="Session" required value="<?php echo $Session; ?>">
            </td>
            </tr>
            <tr>
                <div class="boutton">
                    <td><input type="submit" Value="Update" name="update"></td>
                    <td><a href="index.php">accueil</a></td>
                    <td><input type="reset" Value="Annuler" name="reset"  onclick="cancelForm()"></td>
                </div>
            </tr>
        </table>
    </form>
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

        function cancelForm() {
            // Redirect to the index page
            window.location.href = "index.php";
        }

    </script>
</body>

</html>