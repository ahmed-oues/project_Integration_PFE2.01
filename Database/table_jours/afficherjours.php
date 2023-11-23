<?php 
include_once "connexion.php";

$d = $idcon->query($sql = "SELECT * FROM Jours");
$d->execute();

$res = $d->fetchAll();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Votre Titre</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        table, th, td {
            border: 1px solid #aaa;
        }
        h1 {
            text-align: center;
        }
        
        th, td {
            padding: 10px;
            text-align: left;
        }
        
        th {
            background-color: #007BFF;
            color: #fff;
        }
        

        /* Ajoutez ceci dans la section <style> de votre HTML */
a.return-button {
    display: inline-block;
    padding: 10px 20px;
    background-color: #007BFF;
    color: #fff;
    text-decoration: none;
    border-radius: 5px;
    margin-top: 20px;
    transition: background-color 0.3s;
}

a.return-button:hover {
    background-color: #0056b3;
}


    </style>
</head>
<body>
    <h1>Résultat de la requête</h1>
    <table>
        <tr>
            <th>Code_Prof</th>
            <th>Session</th>
            <th>Jours</th>
            <th>Seance</th>
            <th>annee_universaire</th>
            <th>Semestre</th>
          
        </tr>

        <?php foreach ($res as $post) { ?>
            <tr>
                <td><?= $post['code_prof'] ?></td>
                <td><?= $post['Session'] ?></td>
                <td><?= $post['Jours'] ?></td>
                <td><?= $post['Seance'] ?></td>
                <td><?= $post['Annee_universaire'] ?></td>
                <td><?= $post['Semestre'] ?></td>
                
            </tr>
        <?php } ?>

    </table>

    <!-- Bouton pour revenir à la page "projet.php" -->
    <a href="projet.php"  class="return-button" >Accueil</a>
</body>
</html>
