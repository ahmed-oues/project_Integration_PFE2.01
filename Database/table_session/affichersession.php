<?php
require "connexion.php";
$req = "SELECT * FROM session";
$stmt = $idcon->query($req);
$stmt->setFetchMode(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html>
<head>
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




.bouton-ajouter {
    background-color: #007BFF; /* Une couleur de fond bleue */
    color: white;             /* Texte blanc */
    border: none;             /* Pas de bordure */
    padding: 10px 15px;       /* Espace interne autour du texte */
    border-radius: 5px;       /* Coins arrondis */
    cursor: pointer;          /* Curseur en forme de main au survol */
    transition: background-color 0.3s; /* Animation douce lors du survol */
}

.bouton-ajouter:hover {
    background-color: #0056b3; /* Une couleur de fond bleue plus foncée lors du survol */
}




    </style>
</head>
<body>
<a href="recherche.php">
    <button class="bouton-ajouter">rechercher une  session</button>
</a>
<table>
    <thead>
        <tr>
            <th class="text-center">Numero Session</th>
            <th class="text-center">Annee</th>
            <th class="text-center">sem</th>
            <th class="text-center">Debut</th>
            <th class="text-center">Fin</th>
            <th class="text-center">Debsem</th>
            <th class="text-center">Finsem</th>
            <th class="text-center">Annea</th>
            <th class="text-center">Anneab</th>
            <th class="text-center">SemAb</th>
            <th class="text-center">Modifier</th>
            <th class="text-center">Supprimer</th>
        </tr>
    </thead>
    <tbody>
 
    <?php while ($ligne = $stmt->fetch()) { ?>
      
            <tr>
                <td><?php echo $ligne['Numero'] ?></td>
                <td><?php echo $ligne['Annee'] ?></td>
                <td><?php echo $ligne['Sem'] ?></td>
                <td><?php echo $ligne['Debut'] ?></td>
                <td><?php echo $ligne['Fin'] ?></td>
                <td><?php echo $ligne['Debsem'] ?></td>
                <td><?php echo $ligne['Finsem'] ?></td>
                <td><?php echo $ligne['Annea'] ?></td>
                <td><?php echo $ligne['Anneab'] ?></td>
                <td><?php echo $ligne['SemAb'] ?></td>
 
                <td><a class="btn" href='modifiersession.php?Cod=<?php echo $ligne['Numero'] ?>'>Modifier</a></td>
                
                <td><a class="btn" href='supprimersession.php?Cod=<?php echo $ligne['Numero'] ?>'>
                Supprimer</a></td>
            </tr>
        <?php } ?>
    </tbody>
</table>
<a href="ajoutersession.php">
    <button class="bouton-ajouter">Ajouter une nouvelle session</button>
</a>
<a href="supprimersession.php">
    <button class="bouton-ajouter">Supprimer une nouvelle session</button>
</a>

</body>
</html>
