<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f0f5f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }

        h1 {
            color: #2c3e50;
        }

        div {
            margin-top: 20px;
        }

        a {
            display: inline-block;
            padding: 10px 20px;
            margin: 5px;
            text-decoration: none;
            color: #fff;
            background-color: #3498db;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        a:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>

    <h1>Tableau de bord</h1>

    <div>
        <a href="crud_operation.php?action=create">Créer</a>
        <a href="crud_operation.php?action=read">Lire</a>
        <a href="crud_operation.php?action=update">Mettre à jour</a>
        <a href="crud_operation.php?action=delete">Supprimer</a>
    </div>

</body>
</html>
