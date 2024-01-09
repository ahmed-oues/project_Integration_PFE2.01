<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajouter</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include_once "connexion.php";
    if (isset($_POST['button'])) {
        $Gouv = $_POST['Gouv'];
        $CodePostal = $_POST['CodePostal'];

        $query = "SELECT * FROM gouvernorats WHERE Gouv = '$Gouv'";
        $result = mysqli_query($con, $query);

        if (mysqli_num_rows($result) > 0) {
            $message = "Ce gouvernorat existe déjà.";
        } else {

            $sql = "INSERT INTO gouvernorats (Gouv, CodePostal) VALUES ('$Gouv', '$CodePostal')";
            $resultat = mysqli_query($con, $sql);

            if ($resultat) {
                $message = "Ajout a été réussi.";
            } else {
                die(mysqli_error($con));
            }
        }
    }

    ?>
    <div class="form">
        <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
        <h2>Ajouter Gouvernorat</h2>
        <p class="erreur_message">
            <?php
            if (!empty($message)) {
                echo $message;
            }
            ?>

        </p>
        <form action="" method="POST">
            <label>Gouvernorat</label>
            <input type="text" name="Gouv" required>
            <label>CodePostal</label>
            <input type="number" name="CodePostal" required>

            <input type="submit" value="Ajouter" name="button">
        </form>
    </div>
</body>

</html>