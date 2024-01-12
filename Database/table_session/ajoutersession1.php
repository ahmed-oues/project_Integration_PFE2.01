<?php
require "connexion.php";
$numero = $_POST['Numerosess'] ;
$annee = $_POST['Annee'] ;
$sem = $_POST['sem'] ;
$debut = $_POST['Debut'] ;
$fin = $_POST['Fin'] ;
$debsem = $_POST['Debsem'] ;
$finsem = $_POST['Finsem'] ;
$annea = $_POST['Annea'] ;
$anneab = $_POST['Anneab'] ;
$semab = $_POST['semab'] ;


$isValid = true;
$errorMessage = "";
if (empty($numero) || empty($annee) || empty($sem) || empty($debut) || empty($fin) || empty($debsem) || empty($finsem) || empty($annea) || empty($anneab) || empty($semab)) {
    $isValid = false;
    $errorMessage = "Tous les champs du formulaire doivent être remplis.";
}

if ($isValid) {
    $reqCheck = $idcon->prepare("SELECT COUNT(*) FROM Session WHERE Numero = ?");
    $reqCheck->bindParam(1, $numero);
    $reqCheck->execute();
    $count = $reqCheck->fetchColumn();

    if ($count > 0) {
        $isValid = false;
        $errorMessage = "Numero de session existe déjà. Veuillez essayer un autre .";
        echo "<a href='ajoutersession.php'>Retour a l'ajout</a>";
    }
}
if ($isValid) {
    if ($debut >= $fin || $debsem >= $finsem) {
        $isValid = false;
        $errorMessage = "Vérifiez les dates saisies : la date de début doit être inférieur à la date de fin.";
        echo "<a href='ajoutersession.php'>Retour a l'ajout</a>";
    }
}

if ($isValid) {
    $req = $idcon->prepare("INSERT INTO Session (Numero, Annee, sem, Debut, Fin, Debsem, Finsem, Annea, Anneab, SemAb) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $req->bindParam(1, $numero);
    $req->bindParam(2, $annee);
    $req->bindParam(3, $sem);
    $req->bindParam(4, $debut);
    $req->bindParam(5, $fin);
    $req->bindParam(6, $debsem);
    $req->bindParam(7, $finsem);
    $req->bindParam(8, $annea);
    $req->bindParam(9, $anneab);
    $req->bindParam(10, $semab);

    if ($req->execute()) {
        echo "Nouvel enregistrement créé avec succès";
        echo "<a href='affichersession.php'>Retour à la liste des sessions</a>";
    } else {
        $isValid = false;
        $errorMessage = "Erreur lors de la création de l'enregistrement.";
    }
}

if (!$isValid) {
    echo $errorMessage;
}
?>
