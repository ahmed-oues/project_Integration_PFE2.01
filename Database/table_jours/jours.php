<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Résultats de la recherche</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-top: 20px;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #007BFF;
            color: white;
        }

        .error {
            color: #ff5c5c;
        }
    </style>
<?php
include_once "connexion.php";

$errors = array(); // Tableau pour stocker les erreurs

if(isset($_POST['ajout_jours'])) {
    $code_prof = $_POST["code_prof"];
    $Session = $_POST["Session"];
    $Jours = $_POST['Jours'];
    $Annee_universaire = $_POST['Annee_universaire'];
    $Semestre = $_POST['Semestre'];

    // Vérification pour permettre uniquement les jours valides
    $jours_valides = array('lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi');
    $seance = isset($_POST['Seance']) ? $_POST['Seance'] : 'S'; // Par défaut, 'S'

    // Vérification pour la validité du semestre
    if (!in_array(strtolower($Jours), $jours_valides)) {
        $errors[] = "Le jour doit être lundi, mardi, mercredi, jeudi, vendredi ou samedi.";
    }

    if (!($Semestre === '1' || $Semestre === '2')) {
        $errors[] = "Le semestre doit être 1 ou 2.";
    }

    if (!preg_match('/^S\d$/', $seance)) {
        $errors[] = "La séance doit commencer par 'S' suivi d'un seul chiffre.";
    }

    // Si aucune erreur n'est détectée, effectuer l'insertion
    if (empty($errors)) {
        $sql = "INSERT INTO Jours(code_prof, Session, Jours, Seance, Annee_universaire, Semestre) VALUES('$code_prof', '$Session', '$Jours', '$seance', '$Annee_universaire', '$Semestre')";
        $idcon->exec($sql);

        header("Location: Projet.php");
        exit;
    } else {
        // Afficher les erreurs
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}




if(isset($_POST['modifier_jours'])) {
    $code_prof = $_POST['code_prof'];
    $Session = $_POST['Session'];
    $Jours = $_POST['Jours'];
    $Annee_universaire = $_POST['Annee_universaire'];
    $Semestre = $_POST['Semestre'];
    
    // Vérification pour la validité du semestre et des jours
    $semestre_valide = in_array($Semestre, ['1', '2']);
    $jours_valides = in_array(strtolower($Jours), ['lundi', 'mardi', 'mercredi', 'jeudi', 'vendredi', 'samedi']);
    
    // Vérification de la séance
    $Seance = isset($_POST['Seance']) ? $_POST['Seance'] : ''; // Par défaut, vide
    $seance_valide = preg_match('/^S\d$/', $Seance); // Commence par 'S' et contient un seul chiffre

    if ($semestre_valide && $jours_valides && $seance_valide) {
        $sql = "UPDATE jours SET Session='$Session', Jours='$Jours', Seance='$Seance', Annee_universaire='$Annee_universaire', Semestre='$Semestre' WHERE code_prof='$code_prof'";
        $idcon->exec($sql);

        header("Location: projet.php");
        exit;
    } else {
        echo "Veuillez entrer un semestre valide (1 ou 2), un jour valide (lundi, mardi, mercredi, jeudi, vendredi, samedi) et une séance valide (commençant par 'S' et contenant un seul chiffre).";
    }
}


if(isset($_POST['supprimer'])) {
    $where = $_POST['new'];

    $sql = "DELETE FROM Jours WHERE Code_prof='$where'";
    $idcon->exec($sql);

    header("Location: projet.php");
    exit;
}






$errors = array(); // Tableau pour stocker les erreurs

$errors = array(); // Tableau pour stocker les erreurs

if(isset($_POST['chercher'])) {
    $id = $_POST['change'];

    $q = $idcon->prepare("SELECT code_prof, Session, Jours, Seance, Annee_universaire, Semestre FROM Jours WHERE code_prof=:id");
    $q->bindParam(':id', $id);
    $q->execute();
    $result = $q->fetch(PDO::FETCH_ASSOC);

    // Vérifier si l'élément existe
    if(empty($result)) {
        $errors[] = "L'élément n'existe pas.";
    } else {
        // Afficher les données dans un tableau
        echo '<table>';
        echo '<tr><th>Code Prof</th><th>Session</th><th>Jours</th><th>Seance</th><th>Annee Universitaire</th><th>Semestre</th></tr>';
        echo '<tr>';
        echo '<td>' . $result['code_prof'] . '</td>';
        echo '<td>' . $result['Session'] . '</td>';
        echo '<td>' . $result['Jours'] . '</td>';
        echo '<td>' . $result['Seance'] . '</td>';
        echo '<td>' . $result['Annee_universaire'] . '</td>';
        echo '<td>' . $result['Semestre'] . '</td>';
        echo '</tr>';
        echo '</table>';
    }

    // Si aucune erreur n'est détectée, rediriger
    if (empty($errors)) {
        $sql = "";
        exit;
    } else {
        // Afficher les erreurs
        foreach ($errors as $error) {
            echo '<p class="error">' . $error . '</p>';
        }
    }
}


?>
