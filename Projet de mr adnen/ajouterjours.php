<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulaire</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f2f2f2;
        }
        h1 {
            text-align: center;
        }
        form {
            max-width: 400px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        form input[type="text"] {
            width: 100%;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #ccc;
            border-radius: 3px;
        }

        form label {
            display: block;
            font-weight: bold;
            margin-top: 10px;
        }

        form input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            padding: 10px 15px;
            border: none;
            border-radius: 3px;
            cursor: pointer;
        }

        form input[type="submit"]:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>
    <h1> Ajouter </h1>
    <form action="jours.php" method="post">
        <label for="numero">Code</label>
        <input type="numero" name="code_prof">

        <label for="Session">Session</label>
        <input type="text" name="Session">

        <label for="Jours">Jours</label>
        <input type="text" name="Jours">

        <label for="Seance">Seance</label>
        <input type="text" name="Seance">

        <label for="Annee_universaire">Annee_universaire</label>
        <input type="text" name="Annee_universaire">

        <label for="Semestre">Semestre</label>
        <input type="numero" name="Semestre">


        <input type="submit" name="ajout_jours" value="Ajouter">
    </form>
</body>
</html>
