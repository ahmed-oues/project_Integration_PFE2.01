<?php
require "connexion.php";
$annee = $_POST['Annee'] ;
$sem = $_POST['Sem'] ;
$debut = $_POST['Debut'] ;
$fin = $_POST['Fin'] ;
$debsem = $_POST['Debsem'] ;
$finsem = $_POST['Finsem'] ;
$annea = $_POST['Annea'] ;
$anneab = $_POST['Anneab'] ;
$semab = $_POST['SemAb'] ;


$isValid = true;
$errorMessage = "";

if (empty($numero) || empty($annee) || empty($sem) || empty($debut) || empty($fin) || empty($debsem) || empty($finsem) || empty($annea) || empty($anneab) || empty($semab)) {
    $isValid = false;
    $errorMessage = "Tous les champs du formulaire doivent être remplis.";
}

if ($isValid && ($debut >= $fin || $debsem >= $finsem)) {
    $isValid = false;
    $errorMessage = "Vérifiez les dates saisies : la date de début doit être inférieure à la date de fin.";
}

if ($isValid) {
    $req = $idcon->prepare("UPDATE Session SET Annee = ?, sem = ?, Debut = ?, Fin = ?, Debsem = ?, Finsem = ?, Annea = ?, Anneab = ?, SemAb = ? WHERE Numero = ?");
    $req->execute([$annee, $sem, $debut, $fin, $debsem, $finsem, $annea, $anneab, $semab, $numero]);

    header('Location: affichersession.php');
    exit(); 
} else {
    echo $errorMessage;
    echo "<a href='modifiersession.php'>Retour à la modification</a>";
}
?>
