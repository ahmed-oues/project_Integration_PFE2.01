<html>
<head>
<link rel="stylesheet" href="style.css">
    <title>Modifier Session</title>
</head>
<body>
    <fieldset>
        <legend>Modifier Session</legend>
        <form action="modifiersession1.php" method="post">
        <div class="flex-container">
    <div class="flex-item">
        (*)Numero <input type="text" name="Numero">
    </div>
    <div class="flex-item">
        (*)Annee <input type="text" name="Annee">
    </div>
</div>

<div class="flex-item">
                    (*)sem 
                    <select name="Sem">
                        <option value="1">1</option>
                        <option value="2">2</option>
                    </select>
                </div>
    <div class="flex-item">
        Debut <input type="date" name="Debut">
    </div>
</div>

Fin <input type="date" name="Fin"> <br>
Debsem <input type="date" name="Debsem"> <br>
Finsem <input type="date" name="Finsem"> <br>
Annea<input type="text" name="Annea"> <br>
Anneab <input type="text" name="Anneab"> <br>
semAB<select name="SemAb">
                <option value="A">A</option>
                <option value="B">B</option>
            </select><br>
            <input type="submit" value="Modifier"> 
            <input type="reset" value="Annuler"> 
        </form>
    </fieldset>
</body>
</html>
