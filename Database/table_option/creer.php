<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Options</title>
    <!-- <link rel="stylesheet" href="styles/style.css"> -->
</head>

<body>
    <h1>Créer un option</h1>
    <form action="create.php" method="POST">
        <label for="Option">Option:</label>
        <select name="Option" id="Option" required>
            <option value="Option1">Option 1</option>
            <option value="Option2">Option 2</option>
            <option value="Option3">Option 3</option>
            <option value="Option4">Option 4</option>
        </select><br />

        <label for="Departement">Département:</label>
        <select name="Departement" id="Departement" required>
            <option value="info">info</option>
            <option value="electrique">electrique</option>
            <option value="mechanique">mechanique</option>
            <option value="buisness">buisness</option>
        </select><br />



        <label for="OptionAraB">OptionAraB:</label>
        <input type="text" id="OptionAraB" name="OptionAraB" required>
        <br />
        <label for="CodeOption">CodeOption:</label>
        <input type="number" id="CodeOption" name="CodeOption" required>
        <br />
        <button type="submit" name="create" class="update">Créer</button>

    </form>

</body>

</html>