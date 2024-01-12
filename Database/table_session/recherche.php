<?php
require "connexion.php"; 

$searchType = $_POST['searchType'] ?? '';
$searchValue = $_POST['searchValue'] ?? '';
$resultats = [];

if (!empty($searchType) && !empty($searchValue)) {

    $query = "SELECT numero, annee, sem, debut, fin, debsem, finsem, annea, anneab, semab FROM Session WHERE $searchType = :searchValue";
    $req = $idcon->prepare($query);

    $req->bindParam(':searchValue', $searchValue);

    $req->execute();

    
    if ($req) {
        $resultats = $req->fetchAll(PDO::FETCH_ASSOC);
    } else {
        // Handle query error
        echo "Error: Failed to retrieve data";
    }
}
?>


<!DOCTYPE html>
<html>
<head>
    <title>recherche</title>
    
    <style>

body {
    font-family: Arial, sans-serif;
    background-color: #e8f6fb;
}

table {
    width: 80%;
    margin: 50px auto;
    border-collapse: collapse;
    background-color: #ffffff;
    box-shadow: 0px 0px 20px rgba(0, 0, 0, 0.1);
    border-radius: 8px;
    overflow: hidden;
}

th, td {
    padding: 15px;
    text-align: center;
    border-bottom: 1px solid #e0e0e0;
}

th {
    background-color: #f8f8f8;
    color: #333333;
    font-weight: bold;
}

tr:hover {
    background-color: #f2f2f2;
}

.btn {
    text-decoration: none;
    background-color: #007bff;
    color: #fff;
    padding: 8px 15px;
    border-radius: 5px;
    transition: background-color 0.2s;
}

.btn:hover {
    background-color: #0056b3;
}

</style>
</head>
<body>
<form action="recherche.php" method="post">
    <p>Veuillez choisir le type de recherche et remplir les champs suivant :</p>
    <select name="searchType" id="searchType" onchange="updateInputType()">
        <option value="numero">Numero</option>
        <option value="annee">Annee</option>
        <option value="sem">Sem</option>
        <option value="debut">Debut (datetime)</option>
        <option value="fin">Fin (datetime)</option>
        <option value="debsem">Debsem (datetime)</option>
        <option value="finsem">Finsem (datetime)</option>
        <option value="annea">Annea</option>
        <option value="anneab">Anneab</option>
        <option value="semab">SemAb</option>
    </select>
    <input type="text" name="searchValue" id="searchValue">
    <input class="btn" type="submit" value="Rechercher">
</form>

<script>
    function updateInputType() {
        var searchType = document.getElementById("searchType").value;
        var inputField = document.getElementById("searchValue");

        if (searchType === 'debut' || searchType === 'fin' || searchType === 'debsem' || searchType === 'finsem') {
            inputField.type = 'date';
        } else {
            inputField.type = 'text';
        }
    }
</script>
<?php if (!empty($resultats)): ?>
        <table>
            <thead>
                <tr>
                    <th>Numero Session</th>
                    <th>Annee</th>
                    <th>Sem</th>
                    <th>Debut</th>
                    <th>Fin</th>
                    <th>Debsem</th>
                    <th>Finsem</th>
                    <th>Annea</th>
                    <th>Anneab</th>
                    <th>SemAb</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($resultats as $ligne): ?>
                    <tr>
                    <td><?php echo $ligne['numero'] ?></td>
                <td><?php echo $ligne['annee'] ?></td>
                <td><?php echo $ligne['sem'] ?></td>
                <td><?php echo $ligne['debut'] ?></td>
                <td><?php echo $ligne['fin'] ?></td>
                <td><?php echo $ligne['debsem'] ?></td>
                <td><?php echo $ligne['finsem'] ?></td>
                <td><?php echo $ligne['annea'] ?></td>
                <td><?php echo $ligne['anneab'] ?></td>
                <td><?php echo $ligne['semab'] ?></td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
    <a href="affichersession.php">
    <button class="btn">Retourner à la page d'affichage</button>
</a>

</a>
</body>
</html>
