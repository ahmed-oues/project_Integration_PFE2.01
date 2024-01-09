<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <?php
    include_once "connexion.php";

    $message = "";

    if (isset($_GET['updateGouv'])) {
        $Gouv = $_GET['updateGouv'];

        $sql = "SELECT * FROM gouvernorats WHERE Gouv = '$Gouv'";
        $result = mysqli_query($con, $sql);

        if (mysqli_num_rows($result) == 1) {
            $row = mysqli_fetch_assoc($result);

            if (isset($_POST['button'])) {
                $newGouv = $_POST['Gouv'];
                $newCodePostal = $_POST['CodePostal'];
                $checkQuery = "SELECT * FROM gouvernorats WHERE Gouv = '$newGouv' AND Gouv != '$Gouv'";
            $checkResult = mysqli_query($con, $checkQuery);

            if (mysqli_num_rows($checkResult) > 0) {
                $message = "Ce gouvernorat existe déjà.";
            } else {
                $sql = "UPDATE gouvernorats SET Gouv = '$newGouv', CodePostal = '$newCodePostal' WHERE Gouv = '$Gouv'";
                $resultat = mysqli_query($con, $sql);

                if ($resultat) {
                    $message = "Mise à jour réussie";
                } else {
                    $message = "Erreur lors de la mise à jour : " . mysqli_error($con);
                }
            }
        }
    } else {
        header("Location: index.php");
    }
} else {
    header("Location: index.php");
}
    ?>

    <!DOCTYPE html>
    <html lang="en">

    <head>

    </head>

    <body>
        <div class="form">
            <a href="index.php" class="back_btn"><img src="images/back.png"> Retour</a>
            <h2>Modifier Gouvernorat</h2>
            <p class="erreur_message">
                <?php
                if (!empty($message)) {
                    echo $message;
                }
                ?>
            </p>
            <form action="" method="POST">
                <label>Gouvernorat</label>
                <input type="text" name="Gouv" value="<?php echo $row['Gouv']; ?>">
                <label>CodePostal</label>
                <input type="text" name="CodePostal" value="<?php echo $row['CodePostal']; ?>">
                <input type="submit" value="update" name="button">
            </form>
        </div>
    </body>

    </html>