<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion Gouvernorats</title>
    <link rel="stylesheet" href="style.css">
    
</head>

<body>
    <div class="container">
        <form action="index.php" method="GET" style="margin-bottom:70px;">
            <input type="text" name="search" placeholder="Rechercher par nom ou code postal" style="width: 280px;">
            <input type="submit" value="Rechercher">

        </form>

        <a href="ajouter.php" class="Btn_add"> <img src="images/plus.png"> Ajouter</a>



        <table>
            <tr id="items">
                <th>Gouvernorat</th>
                <th>CodePostale</th>
                <th>Modifier</th>
                <th>Supprimer</th>
            </tr>

            <?php

            include_once "connexion.php";

            if (isset($_GET['search'])) {
                $search = $_GET['search'];
                $query = "SELECT * FROM gouvernorats WHERE Gouv LIKE '%$search%' OR CodePostal LIKE '%$search%'";
            } else {
                $query = "SELECT * FROM gouvernorats";
            }

            $result = mysqli_query($con, $query);

            if (mysqli_num_rows($result) == 0) {
                echo "Aucun résultat trouvé.";
            } else {
                while ($row = mysqli_fetch_assoc($result)) {
            ?>
                    <tr>
                        <td><?= $row['Gouv'] ?></td>
                        <td><?= $row['CodePostal'] ?></td>
                        <td><a href="modifier.php?updateGouv=<?= $row['Gouv'] ?>"><img src="images/pen.png"></a></td>
                        <td><a href="supprimer.php?Gouv=<?= $row['Gouv'] ?>"><img src="images/trash.png"></a></td>
                    </tr>
            <?php
                }
            }
            ?>
        </table>
    </div>
</body>

</html>