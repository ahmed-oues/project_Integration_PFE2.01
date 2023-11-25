<!DOCTYPE html>
<html>
<head>
    <title>Créer un enregistrement</title>
</head>
<body>
    <h2>Créer un enregistrement</h2>
    <form action="enregistrer.php" method="post" enctype="multipart/form-data">
        <label for="Motif">Motif:</label>
        <input type="text" name="Motif" id="Motif"><br><br>

        <label for="MatEtud">Matricule Étudiant:</label>
        <input type="text" name="MatEtud" id="MatEtud"><br><br>

        <?php


        $servername = "localhost";
        $username = "user";
        $password = "user";
        $dbname = "Scolarite";
        
            $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        
            // SQL query to select data from the "Piece" table
            $sql = "SELECT Typepiece,LibPiece FROM Piece";
        
            $result = $conn->query($sql);
            echo"<label for='TypePiece'>Type de Pièce:</label>";
            if ($result->rowCount() > 0) {
                echo "<select name='TypePiece' id='TypePiece' >";
                while ($row = $result->fetch()) {
                    echo "<option value=".$row["Typepiece"].">". $row["LibPiece"] . "</option>";
                }
                echo "</select> <br><br>";
            } 
        
        ?>
        
        <label for="DatePiece">Date de Pièce:</label>
        <input type="date" name="DatePiece" id="DatePiece"><br><br>

        <label for="Session">Session :</label>
<select name="Session" id="Session">
    <option value="">Sélectionner une session</option>
    <option value="2022-2023">2022-2023</option>
    <option value="2023-2024">2023-2024</option>
</select>
<br><br>


        <label for="image">Sélectionnez une image à télécharger</label>
        <input type="file" class="form-control-file" id="image" name="image"><br><br>

        <input type="submit" value="Créer">
        <a href="affichage.php"><button type='button' name="annuler">annuler</button></a>
    </form>
</body>
</html>
