<?php
require "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $departement = $_POST['departement'];

    $query = "SELECT * FROM Prof WHERE Département = :departement";
    $stmt = $idcon->prepare($query);
    $stmt->bindParam(':departement', $departement);
    $stmt->execute();
    $enseignants = $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche d'enseignants par département</title>

    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f5f9;
            padding: 20px;
        }

        h1, h2 {
            color: #2c3e50;
        }

        form {
            max-width: 400px;
            margin: 20px 0;
        }

        label {
            display: block;
            margin-bottom: 5px;
            color: #3498db;
        }

        input {
            padding: 10px;
            margin-bottom: 15px;
            width: 100%;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #3498db;
            color: #fff;
            border: none;
            border-radius: 3px;
            padding: 10px;
            cursor: pointer;
        }

        ul {
            list-style-type: none;
            padding: 0;
        }

        li {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>
    <h1>Recherche d'enseignants par département</h1>
    <form method="post">
        <label for="departement">Département :</label>
        <input type="text" name="departement" id="departement">
        <input type="submit" value="Rechercher">
    </form>

    <?php if(isset($enseignants)): ?>
        <h2>Résultats pour le département : <?php echo $departement; ?></h2>
        <ul>
            <?php foreach($enseignants as $enseignant): ?>
                <li><?php echo $enseignant['Nom'] . ' ' . $enseignant['Prénom']; ?></li>
            <?php endforeach; ?>
        </ul>
    <?php endif; ?>
</body>
</html>
