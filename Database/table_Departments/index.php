<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Departements home</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f0f0;
        }

        .header {
            background-color: #3498db;
            color: #fff;
            padding: 20px;
            text-align: center;
        }

        .container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
        }

        h1 {
            font-size: 36px;
        }

        p {
            font-size: 18px;
            line-height: 1.5;
        }

        .button-container {
            text-align: center;
            margin-top: 20px;
        }

        .button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            font-weight: bold;
            margin: 10px;
            border-radius: 5px;
            transition: background-color 0.3s ease;
        }

        .button:hover {
            background-color: #2980b9;
        }
    </style>
</head>
<body>
    <div class="header">
        <h1>Departements</h1>
    </div>

    <div class="container">
       

        <div class="button-container">
            <a href="forminsertionDEP.php" class="button">Inserer Departements</a>
            <a href="formSuppression.php" class="button">Supprimer Departements</a>
            <a href="formModifierDep.php" class="button">Modifier Departements</a>
            <a href="formchercherDep.php" class="button">chercher Departements</a>
            <a href="afficherDep.php" class="button">Afficher Departements</a>
        </div>
    </div>
</body>
</html>