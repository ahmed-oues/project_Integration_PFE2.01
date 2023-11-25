<!DOCTYPE html>
<html lang="en">
<head><style>
        body {
            font-family: Arial, sans-serif;
            margin: 20px;
        }

        h1 {
            color: #333;
        }

        h2 {
            color: #555; 
            margin-top: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        tr:hover {
            background-color: #f5f5f5;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List</title>
</head>
<body>
    <h1> Liste de profsituation</h1>
    <h2> <a href="add.php">Ajouter profsituation  </h2>
    <h2> <a href="mod.php">Modifier profsituation  </h2>
    <h2> <a href="del.php">Supprimer profsituation  </h2>
    <h2> <a href="search.php">Rechercher profsituation </a> </h2>
    
    <table border="1">
        <tr>
            <th>CodeProf</th>
            <th>Sess</th>
            <th>Situation</th>
            <th>Grade</th>
        </tr>

        <?php
        include("conn.php");
        $sql = "SELECT * FROM ProfSituation;";
        $result = mysqli_query($conn, $sql);
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo "<tr>";
                echo "<td>" . $row["CodeProf"] . "</td>";
                echo "<td>" . $row["Sess"] . "</td>";
                echo "<td>" . $row["Situation"] . "</td>";
                echo "<td>" . $row["Grade"] . "</td>";
                echo "</tr>";
            }
        }
        ?>
    </table>
</body>
</html>
