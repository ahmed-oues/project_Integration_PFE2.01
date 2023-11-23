<?php
if (isset($_GET["NumSem"])){
    $NumSem = $_GET["NumSem"];


    include "db_conn.php";

    $sql = "DELETE FROM `semaine` WHERE NumSem=$NumSem";
    $conn->query($sql);
}


?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Supprimer Semaine</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css?t<?php echo time()?>" />
</head>
<body>
    <div class="container mt-4">
        <h2>Supprimer Semaine</h2>

        <?php
        if (isset($_GET["NumSem"])) {
            $NumSem = $_GET["NumSem"];

            include "db_conn.php";

            $sql = "DELETE FROM semaine WHERE NumSem=$NumSem";
            $result = $conn->query($sql);

            if ($result) {
                echo "<p>La semaine a été supprimée avec succès.</p>";
            } else {
                echo "<p>Erreur lors de la suppression de la semaine : " . $conn->error . "</p>";
            }
        }
        ?>

        <a href="index.php" class="btn btn-primary mt-3">Retour à l'Accueil</a>
    </div>

</body>
</html>
