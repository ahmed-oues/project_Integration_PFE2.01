<!DOCTYPE html>
<html>
<head>
    <title>Liste des enregistrements DossierEtud</title>
</head>
<body>
    <h2>Liste des enregistrements DossierEtud</h2>
<a href="create.php">ajouter un dossier</a>
    <table border="1">
        <tr>
            <th>Ndossier</th>
            <th>Motif</th>
            <th>MatEtud</th>
            <th>TypePiece</th>
            <th>DatePiece</th>
            <th>Session</th>
            <th>nomfichierpiece</th>
            <th>Action</th>
        </tr>

        <?php
        // Replace these with your database connection details
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "etude";

        try {
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            // SQL query to select data from the "DossierEtud" table
            $sql = "SELECT * FROM DossierEtud";
            $result = $conn->query($sql);

            foreach ($result as $row) {
                echo "<tr>";
                echo "<td>" . $row['Ndossier'] . "</td>";
                echo "<td>" . $row['Motif'] . "</td>";
                echo "<td>" . $row['MatEtud'] . "</td>";
                echo "<td>" . $row['TypePiece'] . "</td>";
                echo "<td>" . $row['DatePiece'] . "</td>";
                echo "<td>" . $row['Session'] . "</td>";
                echo "<td>" . $row['nomfichierpiece'] . "</td>";
                echo '<td><a href="modifier.php?Ndossier=' . $row['Ndossier'] .'">Modifier</a> | ';
                echo '<a href="supprimer.php?Ndossier=' . $row['Ndossier'] . '&&nom=' . $row['nomfichierpiece'].'">Supprimer</a></td>';
                echo "</tr>";
            }
        } catch (PDOException $e) {
            echo "Erreur : " . $e->getMessage();
        }

        $conn = null;
        ?>
    </table>
</body>
</html>
