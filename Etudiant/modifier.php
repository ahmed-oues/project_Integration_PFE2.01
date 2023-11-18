<?php 
ini_set("display_errors", '1');
error_reporting(E_ALL);
require_once 'CRUDfonctons.php';
$id = $_GET['NCIN'];
$etudiantData = getEtudiantsFromDatabaseParam($id);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="etudiantForme.css">
    <title>Etudiant Form</title>
</head>
<body>
    <?php foreach ($etudiantData as $etudiant){?>
<form action="modifiFUN.php" method="post">
    <label for="Nom">Nom:</label>
    <input type="text" name="Nom" maxlength="25" value="<?php echo $etudiant['Nom']; ?>" required><br>

    <label for="DateNais">Date de Naissance:</label>
    <input type="datetime-local" name="DateNais" value="<?php echo $etudiant['DateNais']; ?>"><br>

    <label for="NCIN">NCIN:</label>
    <input type="text" name="NCIN" maxlength="10" value="<?php echo $etudiant['NCIN']; ?>" required><br>

    <label for="NCE">NCE:</label>
    <input type="text" name="NCE" maxlength="15" value="<?php echo $etudiant['NCE']; ?>" required><br>

    <label for="TypBac">Type de Baccalauréat:</label>
    <input type="text" name="TypBac" maxlength="20" value="<?php echo $etudiant['TypBac']; ?>"><br>

    <label for="Prénom">Prénom:</label>
    <input type="text" name="Prénom" maxlength="25" value="<?php echo $etudiant['Prenom']; ?>"><br>

    <label for="Sexe">Sexe:</label>
    <input type="number" name="Sexe" value="<?php echo $etudiant['Sexe']; ?>"><br>

    <label for="LieuNais">Lieu de Naissance:</label>
    <input type="text" name="LieuNais" maxlength="60" value="<?php echo $etudiant['LieuNais']; ?>"><br>

    <label for="Adresse">Adresse:</label>
    <input type="text" name="Adresse" maxlength="100" value="<?php echo $etudiant['Adresse']; ?>"><br>

    <label for="Ville">Ville:</label>
    <input type="text" name="Ville" maxlength="30" value="<?php echo $etudiant['Ville']; ?>"><br>

    <label for="CodePostal">Code Postal:</label>
    <input type="number" name="CodePostal" value="<?php echo $etudiant['CodePostal']; ?>"><br>

    <label for="nnn">Numéro de Téléphone:</label>
    <input type="text" name="nnn" maxlength="10" value="<?php echo $etudiant['NTel']; ?>"><br>

    <label for="CodClasse">Code de Classe:</label>
    <input type="text" name="CodClasse" maxlength="9" value="<?php echo $etudiant['CodClasse']; ?>"><br>

    <label for="DécisionConseil">Décision du Conseil:</label>
    <input type="text" name="DécisionConseil" maxlength="12" value="<?php echo $etudiant['DecisionduConseil']; ?>"><br>

    <label for="AnnéeUniversitaire">Année Universitaire:</label>
    <input type="text" name="AnnéeUniversitaire" maxlength="5" value="<?php echo $etudiant['AnneeUnversitaire']; ?>"><br>

    <label for="Semestre">Semestre:</label>
    <input type="number" name="Semestre" value="<?php echo $etudiant['Semestre']; ?>"><br>

    <label for="Dispenser">Dispenser:</label>
    <input type="checkbox" name="Dispenser" <?php echo $etudiant['Dispenser'] ? 'checked' : ''; ?>><br>

    <label for="AnneesOpt">Années Optionnelles:</label>
    <input type="datetime-local" name="AnneesOpt" value="<?php echo $etudiant['Anneesopt']; ?>"><br>

    <label for="DatePremiereInscp">Date Première Inscription:</label>
    <input type="datetime-local" name="DatePremiereInscp" value="<?php echo $etudiant['DatePremiereInscp']; ?>"><br>

    <label for="Gouvernorat">Gouvernorat:</label>
    <input type="text" name="Gouvernorat" maxlength="12" value="<?php echo $etudiant['Gouvernorat']; ?>"><br>

    <label for="MentionBac">Mention du Baccalauréat:</label>
    <input type="text" name="MentionBac" maxlength="12" value="<?php echo $etudiant['MentionduBac']; ?>"><br>

    <label for="Nationalite">Nationalité:</label>
    <input type="text" name="Nationalite" maxlength="25" value="<?php echo $etudiant['Nationalite']; ?>"><br>

    <label for="CodeCNSS">Code CNSS:</label>
    <input type="text" name="CodeCNSS" maxlength="3" value="<?php echo $etudiant['CodeCNSS']; ?>"><br>

    <label for="NomArabe">Nom en Arabe:</label>
    <input type="text" name="NomArabe" maxlength="25" value="<?php echo $etudiant['NomArabe']; ?>"><br>

    <label for="PrenomArabe">Prénom en Arabe:</label>
    <input type="text" name="PrenomArabe" maxlength="25" value="<?php echo $etudiant['PrenomArabe']; ?>"><br>

    <label for="LieuNaisArabe">Lieu de Naissance en Arabe:</label>
    <input type="text" name="LieuNaisArabe" maxlength="60" value="<?php echo $etudiant['LieuNaisArabe']; ?>"><br>

    <label for="AdresseArabe">Adresse en Arabe:</label>
    <input type="text" name="AdresseArabe" maxlength="100" value="<?php echo $etudiant['AdresseArabe']; ?>"><br>

    <label for="VilleArabe">Ville en Arabe:</label>
    <input type="text" name="VilleArabe" maxlength="30" value="<?php echo $etudiant['VilleArabe']; ?>"><br>

    <label for="GouvernoratArabe">Gouvernorat en Arabe:</label>
    <input type="text" name="GouvernoratArabe" maxlength="15" value="<?php echo $etudiant['GouvernoratArabe']; ?>"><br>

    <label for="TypeBacAB">Type de Baccalauréat en Arabe:</label>
    <input type="text" name="TypeBacAB" maxlength="15" value="<?php echo $etudiant['TypeBacAB']; ?>"><br>

    <label for="Photo">Photo:</label>
    <input type="text" name="Photo" maxlength="10" value="<?php echo $etudiant['Photo']; ?>"><br>

    <label for="Origine">Origine:</label>
    <input type="text" name="Origine" maxlength="20" value="<?php echo $etudiant['Origine']; ?>"><br>

    <label for="SituationDepart">Situation de Départ:</label>
    <input type="text" name="SituationDepart" maxlength="25" value="<?php echo $etudiant['SituationDpart']; ?>"><br>

    <label for="NBAC">Numéro de Baccalauréat:</label>
    <input type="text" name="NBAC" maxlength="12" value="<?php echo $etudiant['NBAC']; ?>"><br>

    <label for="Redaut">Redoublant:</label>
    <input type="number" name="Redaut" value="<?php echo $etudiant['Redaut']; ?>"><br>

    <input type="submit" value="Updatae">
    <?php } ?>
</form>

</body>
</html>
