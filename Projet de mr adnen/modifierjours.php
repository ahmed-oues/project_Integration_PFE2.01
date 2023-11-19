<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Jours</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 400px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.2);
            margin-top: 20px;
        }
        h2 {
            text-align: center;
        }
        label {
            display: block;
            margin: 10px 0;
        }
        input[type="text"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
        }
        input[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Modifier Jours</h2>
        <form method="POST" action="jours.php">
            <label for="code_prof">Code Prof:</label>
            <input type="numero" name="code_prof" id="code_prof" required>

            <label for="Session">Session:</label>
            <input type="text" name="Session" id="Session" required>

            <label for="Jours">Jours:</label>
            <input type="text" name="Jours" id="Jours" required>

            <label for="Seance">Seance:</label>
            <input type="text" name="Seance" id="Seance" required>

            <label for="Annee_universaire">Annee Universaire:</label>
            <input type="text" name="Annee_universaire" id="Annee_universaire" required>

            <label for="Semestre">Semestre:</label>
            <input type="numero" name="Semestre" id="Semestre" required>

            <input type="submit" name="modifier_jours" value="Modifier">
        </form>
    </div>
</body>
</html>
