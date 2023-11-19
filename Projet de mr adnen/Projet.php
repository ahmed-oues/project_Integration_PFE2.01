<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Gestion des Jours</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <style> 
/* Réinitialisation des styles par défaut */
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

/* Style de base pour le corps de la page */
body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f4;
    margin: 0;
    padding: 0;
}

/* Style pour l'en-tête de la page */
h1 {
    text-align: center;
    padding: 20px;
    background-color: #007BFF;
    color: #fff;
}

/* Style pour la liste de liens */
ul {
    list-style-type: none;
    text-align: center;
    margin-top: 20px;
}

/* Style pour les éléments de la liste */
li {
    display: inline;
    margin: 0 10px;
}

/* Style pour les liens */
a {
    text-decoration: none;
    background-color: #007BFF;
    color: #fff;
    padding: 10px 20px;
    border-radius: 5px;
    transition: background-color 0.3s;
}

/* Style pour les liens au survol */
a:hover {
    background-color: #0056b3;
}
</style> 
</head>
<body>
    <h1>Gestion des Jours</h1>
    <ul>
        <li><a href="afficherjours.php">Afficher les Jours</a></li>
        <li><a href="ajouterjours.php">Ajouter un Jour</a></li>
        <li><a href="chercherjours.php">Chercher un Jour</a></li>
        <li><a href="modifierjours.php">Modifier un Jour</a></li>
        <li><a href="supprimerjours.php">Supprimer un Jour</a></li>
    </ul>
</body>
</html>
