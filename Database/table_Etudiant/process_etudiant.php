<?php
require_once 'CRUDfonctons.php';
ini_set("display_errors", '1');
error_reporting(E_ALL);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $data = array(
        "Nom" => $_POST["Nom"],
        "DateNais" => $_POST["DateNais"],
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
        "Anneesopt" => $_POST["AnneesOpt"],
        "DatePremiereInscp" => $_POST["DatePremiereInscp"],
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

    $errors[]=processForm($data);
    
    if (empty($errors)) {
        insertData($data);
        echo "Etudiant ajouter!!";
        header("location: showAllletudiants.php");


    } else {
        echo "Validation failed. Errors: ";
        print_r($errors);
    }

}
?>
