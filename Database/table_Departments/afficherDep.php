<?php
require 'connexion.php';
$req = $idcom->prepare("SELECT CodeDep, Departement, Responsable, MatProf, DepartementARAB FROM Departements");
$req->execute();
$count = $req->rowCount();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Liste des Départements</title>
</head>
<body>
    <h1>Liste des Départements</h1>

    <?php if ($count <= 0): ?>
        <p>Aucun département dans la base.</p>
    <?php else: ?>
        <table border="1">
            <thead>
                <tr>
                    <th>Code du département</th>
                    <th>Nom du département</th>
                    <th>Responsable</th>
                    <th>MatProf</th>
                    <th>Nom du département en arabe</th>
                </tr>
            </thead>
            <tbody>
                <?php while ($row = $req->fetch(PDO::FETCH_ASSOC)): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row['CodeDep']); ?></td>
                        <td><?php echo htmlspecialchars($row['Departement']); ?></td>
                        <td><?php echo htmlspecialchars($row['Responsable']); ?></td>
                        <td><?php echo htmlspecialchars($row['MatProf']); ?></td>
                        <td><?php echo htmlspecialchars($row['DepartementARAB']); ?></td>
                    </tr>
                <?php endwhile; ?>
            </tbody>
        </table>
    <?php endif; ?>
</body>
</html>
