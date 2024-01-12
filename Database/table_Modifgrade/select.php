<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=Scolarite", "user", "user");
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    // Fetch data from the modifgrade table
    $result = $pdo->query("SELECT * FROM modifgrade")->fetchAll(PDO::FETCH_ASSOC);

} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des modifgrades</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }

        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>

<h2>Liste des modifgrades</h2>

<!-- Button to navigate to add.php -->
<a href="add.php">Ajouter une modifgrade</a>

<!-- Display data in a table -->
<table>
    <thead>
        <tr>
            <th>Grade</th>
            <th>Date Nomin</th>
            <th>Matricule Prof</th>
            <th>Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($result as $row): ?>
            <tr>
                <td><?php echo $row['Grade']; ?></td>
                <td><?php echo $row['DateNomin']; ?></td>
                <td><?php echo $row['MatProf']; ?></td>
                <td>
                    <!-- Link to modify.php with the modifgrade ID as a parameter -->
                    <a href="modifier.php?id=<?php echo $row['MatProf']; ?>">Modifier</a>
                    <!-- Link to delete.php with the modifgrade ID as a parameter -->
                    <a href="delete.php?id=<?php echo $row['MatProf']; ?>">Supprimer</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

</body>
</html>
