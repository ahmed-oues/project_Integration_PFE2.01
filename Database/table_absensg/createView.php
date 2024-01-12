<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>add record</title>
</head>

<body>
    <h1>Add record here</h1>
    <form method="post" action="create.php">
   
            <?php
        
            echo "<select name='MatriculeProf' required>";
            require 'db_connection.php'; 
            $result = $conn->query("select * FROM Prof");
            while ($row = $result->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="' . $row['Matricule Prof'] . '">' . $row['Nom'] . '</option>';
            }
            echo "</select>";

            echo "<select name='CodeClasse' required>";
            $result2 = $conn->query("select * FROM classe");
            while ($row = $result2->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="' . $row['CodeClasse'] . '">' . $row['IntClasse'] . '</option>';
            }
            echo "</select>";


            echo "<select name='CodeMatiere' required>";
            $result3 = $conn->query("select * FROM matieres");
            while ($row = $result3->fetch(PDO::FETCH_ASSOC)) {
                echo '<option value="' . $row['Code_Matiere'] . '">' . $row['Nom_Matiere'] . '</option>';
            }
            echo "</select>";

            ?>
        
        <input type="number" name="Session" placeholder="Session" required>
        <input type="datetime-local" name="DateAbs" required>
        <input type="text" name="Seance" placeholder="Seance" required>
        <input type="text" name="Motif" placeholder="Motif" maxlength="60">
        <input type="text" name="TypeSeance" placeholder="TypeSeance" maxlength="10">
        <label for="Justifier">Justifier:</label>
        <input type="checkbox" name="Justifier">
        <input type="submit" value="Add Record">
    </form>


</body>

</html>