<?php
include("db_conn.php");

if ($conn->connect_error) {
    die("La connexion a échoué : " . $conn->connect_error);
}

@$motcle = $_GET["motcle"];
$choixRecherche = @$_GET["choixRecherche"];

$dateRecherche = @$_GET["dateRecherche"];
$dateCondition = "";

if (!empty($dateRecherche)) {
    $dateCondition = "OR DateDebut = '$dateRecherche'";
}

if ($choixRecherche == 'NumSem') {
    $sql = "SELECT * FROM semaine WHERE NumSem LIKE '%$motcle%' $dateCondition";
} elseif ($choixRecherche == 'DateDebut') {
    $sql = "SELECT * FROM semaine WHERE DateDebut = '$dateRecherche' $dateCondition";
} else {
    $sql = "SELECT * FROM semaine WHERE NumSem LIKE '%$motcle%' $dateCondition";
}

$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Recherche</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 50px;
        }
        .hidden {
            display: none;
        }
    </style>
</head>
<body>

<div class="container mt-4">
    <h2>Recherche</h2>
    <form name="fo" method="get" action="recherche.php" class="mb-3">
        <select name="choixRecherche" id="choixRecherche" class="form-select w-50 mb-2">
            <option value="NumSem">Recherche par NumSem</option>
            <option value="DateDebut">Recherche par DateDebut</option>
        </select>

        <div class="input-group">
            <label for="dateRecherche" id="labelDateRecherche" class="mx-2 hidden">Date de recherche :</label>
            <input type="date" name="dateRecherche" id="dateRecherche" class="form-control mx-2 hidden">

            <input type="text" name="motcle" id="motcle" class="form-control mx-2 w-25" placeholder="Entrez le NumSem" />

            <button type="submit" name="rechercher" class="btn btn-primary">Rechercher</button>

            <a href="index.php" class="btn btn-secondary mx-2">Retour à l'accueil</a>
        </div>
    </form>

    <div id="resultats">
        <?php
        if ($result->num_rows > 0) {
            echo "<h3>Résultats de la recherche :</h3>";
            while ($row = $result->fetch_assoc()) {
                echo "<p>NumSem : " . $row['NumSem'] . "<br>";
                echo "DateDebut : " . $row['DateDebut'] . "<br>";
                echo "DateFin : " . $row['DateFin'] . "<br>";
                echo "Session : " . $row['Session'] . "</p>";
            }
        } else {
            echo "<p>Aucun résultat trouvé.</p>";
        }
        ?>
    </div>

</div>

<script>
    var choixRecherche = document.getElementById('choixRecherche');
    var labelDateRecherche = document.getElementById('labelDateRecherche');
    var dateRecherche = document.getElementById('dateRecherche');
    var motcle = document.getElementById('motcle');

    choixRecherche.addEventListener('change', function() {
        var selectedValue = this.value;

        if (selectedValue === 'DateDebut') {
            labelDateRecherche.classList.remove('hidden');
            dateRecherche.classList.remove('hidden');
            motcle.classList.add('hidden');
        } else {
            labelDateRecherche.classList.add('hidden');
            dateRecherche.classList.add('hidden');
            motcle.classList.remove('hidden');
        }
    });
</script>

</body>
</html>

<?php
mysqli_close($conn);
?>