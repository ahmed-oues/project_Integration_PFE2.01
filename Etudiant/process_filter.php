<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Etudiant Table</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        th, td {
            border: 1px solid #dddddd;
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #f2f2f2;
        }
        a {
            background-color: #4CAF50; /* Green */
            border: none;
            color: white;
            padding: 15px 32px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
        }
        .senter {
            margin-left: 2669px;
        }
        img{
            width: 20px;
            height: 20px;
            display: flex;
        }
        .filter-input {
        display: none;
    }

    </style>
     <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <script>
          $(document).ready(function () {
            $('.filter-icon').on('click', function () {
                $(this).siblings('.filter-input').toggle();
            });
        });
</script>
</head>
<body>
<form action="process_filter.php" method="post">
  <table border="1">
    <tr>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="Nom" class="filter-input" placeholder="Filter Nom">
</th>
         <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="datetime-local" name="DateNaisST" class="filter-input" placeholder="Filter DateNaisST">
        <input type="datetime-local" name="DateNaisFN" class="filter-input" placeholder="Filter DateNaisFN">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="NCIN" class="filter-input" placeholder="Filter NCIN">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="NCE" class="filter-input" placeholder="Filter NCE">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="TypBac" class="filter-input" placeholder="Filter TypBac">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="Prénom" class="filter-input" placeholder="Filter Prenom">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="number" name="Sexe" class="filter-input" placeholder="Filter Sexe">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="LieuNais" class="filter-input" placeholder="Filter LieuNais">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="Adresse" class="filter-input" placeholder="Filter Adresse">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="Ville" class="filter-input" placeholder="Filter Ville">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="number" name="CodePostal" class="filter-input" placeholder="Filter CodePostal">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="number" name="nnn" class="filter-input" placeholder="Filter NTel">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="CodClasse" class="filter-input" placeholder="Filter CodClasse">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="DécisionConseil" class="filter-input" placeholder="Filter DecisionConseil">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="AnnéeUniversitaire" class="filter-input" placeholder="Filter AnneeUniversitaire">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="number" name="Semestre" class="filter-input" placeholder="Filter Semestre">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <label for="Dispenser" class="filter-input">Dispenser:</label>
        <input type="checkbox" name="Dispenser" class="filter-input" placeholder="Filter Dispenser">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="datetime-local" name="AnneesOptST" class="filter-input" placeholder="Filter AnneesOpt">
        <input type="datetime-local" name="AnneesOptFN" class="filter-input" placeholder="Filter AnneesOpt">
</th>
        <th> <img src="/imges/filter.png/"class="filter-icon"> 
        <input type="datetime-local" name="DatePremiereInscpST" class="filter-input" placeholder="Filter DatePremiereInscp">
        <input type="datetime-local" name="DatePremiereInscpFN" class="filter-input" placeholder="Filter DatePremiereInscp">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="Gouvernorat" class="filter-input" placeholder="Filter Gouvernorat">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="MentionBac" class="filter-input" placeholder="Filter MentionBac">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="Nationalite" class="filter-input" placeholder="Filter Nationalite">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="CodeCNSS" class="filter-input" placeholder="Filter CodeCNSS">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="NomArabe" class="filter-input" placeholder="Filter NomArabe">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="PrenomArabe" class="filter-input" placeholder="Filter PrenomArabe">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="LieuNaisArabe" class="filter-input" placeholder="Filter LieuNaisArabe">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="AdresseArabe" class="filter-input" placeholder="Filter AdresseArabe">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="VilleArabe" class="filter-input" placeholder="Filter VilleArabe">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="GouvernoratArabe" class="filter-input" placeholder="Filter GouvernoratArabe">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="TypeBacAB" class="filter-input" placeholder="Filter TypeBacAB">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="Photo" class="filter-input" placeholder="Filter Photo">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="Origine" class="filter-input" placeholder="Filter Origine">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="text" name="SituationDepart" class="filter-input" placeholder="Filter SituationDepart">
</th>
        <th> <img src="/imges/filter.png/"  class="filter-icon"> 
        <input type="text" name="NBAC" class="filter-input" placeholder="Filter NBAC">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="number" name="Redaut" class="filter-input" placeholder="Filter Redoublant">
</th>
        <th> <img src="/imges/filter.png/" class="filter-icon"> 
        <input type="submit" value="Submit"></th>
    </tr>
</form>
    <!-- </table> -->



<a href="etudiantForm.html" class="senter">ajouter</a>
<?php
$etudiantData;
require_once 'CRUDfonctons.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $dat = array(
        "Nom" => $_POST["Nom"],
        "DateNais" => "",
        "NCIN" => $_POST["NCIN"],
        "NCE" => $_POST["NCE"],
        "TypBac" => $_POST["TypBac"],
        "Prenom" => $_POST["Prénom"],
        "Sexe" => $_POST["Sexe"],
        "LieuNais" => $_POST["LieuNais"],
        "Adresse" => $_POST["Adresse"],
        "Ville" => $_POST["Ville"],
        "CodePostal" => $_POST["CodePostal"],
        "NTel" => $_POST["nnn"],
        "CodClasse" => $_POST["CodClasse"],
        "DecisionduConseil" => $_POST["DécisionConseil"],
        "AnneeUnversitaire" => $_POST["AnnéeUniversitaire"],
        "Semestre" => $_POST["Semestre"],
        "Dispenser" => isset($_POST["Dispenser"]) ? 1 : 0,
        "Anneesopt" => "",
        "DatePremiereInscp" => "",
        "Gouvernorat" => $_POST["Gouvernorat"],
        "MentionduBac" => $_POST["MentionBac"],
        "Nationalite" => $_POST["Nationalite"],
        "CodeCNSS" => $_POST["CodeCNSS"],
        "NomArabe" => $_POST["NomArabe"],
        "PrenomArabe" => $_POST["PrenomArabe"],
        "LieuNaisArabe" => $_POST["LieuNaisArabe"],
        "AdresseArabe" => $_POST["AdresseArabe"],
        "VilleArabe" => $_POST["VilleArabe"],
        "GouvernoratArabe" => $_POST["GouvernoratArabe"],
        "TypeBacAB" => $_POST["TypeBacAB"],
        "Photo" => $_POST["Photo"],
        "Origine" => $_POST["Origine"],
        "SituationDpart" => $_POST["SituationDepart"],
        "NBAC" => $_POST["NBAC"],
        "Redaut" => $_POST["Redaut"]
    );
    $etudiantData=searchInDatabase($dat);

};


if (!empty($etudiantData)) {
    echo '<table border="1">';

    echo '<tr>';
    echo '<th>Nom</th>';
    echo '<th>Date de Naissance</th>';
    echo '<th>NCIN</th>';
    echo '<th>NCE</th>';
    echo '<th>Type de Bac</th>';
    echo '<th>Prénom</th>';
    echo '<th>Sexe</th>';
    echo '<th>Lieu de Naissance</th>';
    echo '<th>Adresse</th>';
    echo '<th>Ville</th>';
    echo '<th>Code Postal</th>';
    echo '<th>Numéro de Téléphone</th>';
    echo '<th>Code de Classe</th>';
    echo '<th>Décision du Conseil</th>';
    echo '<th>Année Universitaire</th>';
    echo '<th>Semestre</th>';
    echo '<th>Dispenser</th>';
    echo '<th>Années Optionnelles</th>';
    echo '<th>Date Première Inscription</th>';
    echo '<th>Gouvernorat</th>';
    echo '<th>Mention du Bac</th>';
    echo '<th>Nationalité</th>';
    echo '<th>Code CNSS</th>';
    echo '<th>Nom en Arabe</th>';
    echo '<th>Prénom en Arabe</th>';
    echo '<th>Lieu de Naissance en Arabe</th>';
    echo '<th>Adresse en Arabe</th>';
    echo '<th>Ville en Arabe</th>';
    echo '<th>Gouvernorat en Arabe</th>';
    echo '<th>Type de Bac en Arabe</th>';
    echo '<th>Photo</th>';
    echo '<th>Origine</th>';
    echo '<th>Situation de Départ</th>';
    echo '<th>Numéro de Bac</th>';
    echo '<th>Redoublant</th>';
    echo '<th>Actions</th>';
    echo '</tr>';

    foreach ($etudiantData as $etudiant) {
        
        
            echo '<tr>';
            echo '<td>' . $etudiant['Nom'] . '</td>';
            echo '<td>' . $etudiant['DateNais'] . '</td>';
            echo '<td>' . $etudiant['NCIN'] . '</td>';
            echo '<td>' . $etudiant['NCE'] . '</td>';
            echo '<td>' . $etudiant['TypBac'] . '</td>';
            echo '<td>' . $etudiant['Prenom'] . '</td>';
            echo '<td>' . $etudiant['Sexe'] . '</td>';
            echo '<td>' . $etudiant['LieuNais'] . '</td>';
            echo '<td>' . $etudiant['Adresse'] . '</td>';
            echo '<td>' . $etudiant['Ville'] . '</td>';
            echo '<td>' . $etudiant['CodePostal'] . '</td>';
            echo '<td>' . $etudiant['NTel'] . '</td>';
            echo '<td>' . $etudiant['CodClasse'] . '</td>';
            echo '<td>' . $etudiant['DecisionduConseil'] . '</td>';
            echo '<td>' . $etudiant['AnneeUnversitaire'] . '</td>';
            echo '<td>' . $etudiant['Semestre'] . '</td>';
            echo '<td>' . $etudiant['Dispenser'] . '</td>';
            echo '<td>' . $etudiant['Anneesopt'] . '</td>';
            echo '<td>' . $etudiant['DatePremiereInscp'] . '</td>';
            echo '<td>' . $etudiant['Gouvernorat'] . '</td>';
            echo '<td>' . $etudiant['MentionduBac'] . '</td>';
            echo '<td>' . $etudiant['Nationalite'] . '</td>';
            echo '<td>' . $etudiant['CodeCNSS'] . '</td>';
            echo '<td>' . $etudiant['NomArabe'] . '</td>';
            echo '<td>' . $etudiant['PrenomArabe'] . '</td>';
            echo '<td>' . $etudiant['LieuNaisArabe'] . '</td>';
            echo '<td>' . $etudiant['AdresseArabe'] . '</td>';
            echo '<td>' . $etudiant['VilleArabe'] . '</td>';
            echo '<td>' . $etudiant['GouvernoratArabe'] . '</td>';
            echo '<td>' . $etudiant['TypeBacAB'] . '</td>';
            echo '<td>' . $etudiant['Photo'] . '</td>';
            echo '<td>' . $etudiant['Origine'] . '</td>';
            echo '<td>' . $etudiant['SituationDpart'] . '</td>';
            echo '<td>' . $etudiant['NBAC'] . '</td>';
            echo '<td>' . $etudiant['Redaut'] . '</td>';
            echo '<td>';
            echo '<a href="modifier.php?NCIN=' . $etudiant['NCIN'] . '">Modifier</a>';
            echo '<a href="delete.php?NCIN=' . $etudiant['NCIN'] . '">Delete</a>';
            echo '</td>';
            echo '</tr>';
        
        
        
    }

    echo '</table>';
} else {
    echo '<p>No data available.</p>';
}
?>
</body>
</html>