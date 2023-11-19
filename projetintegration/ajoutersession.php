<html>
<head>
<link rel="stylesheet" href="style.css">
<title>Session</title>
</head>
<body>
<fieldset>
<legend>Nouvelle Session</legend>
<form action="ajoutersession1.php " method="post">
<p>Veuillez remplir les champs suivant :</p>
<div class="flex-container">
    <div class="flex-item">
        (*)Numero <input type="text" name="Numerosess">
    </div>
    <div class="flex-item">
        (*)Annee <input type="text" name="Annee">
    </div>
</div>

<div class="flex-item">
                    (*)sem 
                    <select name="sem">
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
semAB<select name="semab">
                <option value="A">A</option>
                <option value="B">B</option>
            </select><br>

        <div class="button-container">
            <input type="submit" value="Inserer"> 
            <input type="reset" value="Annuler">
        </div>
</form>
</fieldset>
</body>
</html>