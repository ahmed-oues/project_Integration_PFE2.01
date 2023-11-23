<?php
require "db_connection.php"; 

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matriculeProf = $_GET['matriculeProf'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $cinPasseport = $_POST['cinPasseport'];
    $identifiantCNRPS = $_POST['identifiantCNRPS'];
    $dateNaissance = $_POST['dateNaissance'];
    $nationalite = $_POST['nationalite'];
    $sexe = $_POST['sexe'];
    $dateEntAdm = $_POST['dateEntAdm'];
    $dateEntEtbs = $_POST['dateEntEtbs'];
    $diplome = $_POST['diplome'];
    $adresse = $_POST['adresse'];
    $ville = $_POST['ville'];
    $codePostal = $_POST['codePostal'];
    $telephone = $_POST['telephone'];
    $grade = $_POST['grade'];
    $dateNominationGrade = $_POST['dateNominationGrade'];
    $dateTitularisation = $_POST['dateTitularisation'];
    $nPoste = $_POST['nPoste'];
    $departement = $_POST['departement'];
    $situation = $_POST['situation'];
    $specialite = $_POST['specialite'];
    $nCompte = $_POST['nCompte'];
    $banque = $_POST['banque'];
    $agence = $_POST['agence'];
    $adrVacances = $_POST['adrVacances'];
    $telVacances = $_POST['telVacances'];
    $lieuNaissance = $_POST['lieuNaissance'];
    $debutContrat = $_POST['debutContrat'];
    $finContrat = $_POST['finContrat'];
    $typeContrat = $_POST['typeContrat'];
    $nbContratISETSOUSSE = $_POST['nbContratISETSOUSSE'];
    $nbContratAutreEtb = $_POST['nbContratAutreEtb'];
    $bureau = $_POST['bureau'];
    $email = $_POST['email'];
    $emailInterne = $_POST['emailInterne'];
    $nomArabe = $_POST['nomArabe'];
    $prenomArabe = $_POST['prenomArabe'];
    $lieuNaisArabe = $_POST['lieuNaisArabe'];
    $adresseArabe = $_POST['adresseArabe'];
    $villeArabe = $_POST['villeArabe'];
    $disponible = $_POST['disponible'];
    $sousSP = $_POST['sousSP'];
    $etbOrigine = $_POST['etbOrigine'];
    $typeEnsg = $_POST['typeEnsg'];
    $controlAcces = $_POST['controlAcces'];

    $req = "UPDATE prof 
    SET 
        `Nom` = '$nom', 
        `Prénom` = '$prenom', 
        `CIN ou Passeport` = '$cinPasseport', 
        `Identifiant CNRPS` = '$identifiantCNRPS', 
        `Date de naissance` = '$dateNaissance', 
        `Nationalité` = '$nationalite', 
        `Sexe (M/F)` = '$sexe', 
        `Date Ent Adm` = '$dateEntAdm', 
        `Date Ent Etbs` = '$dateEntEtbs', 
        `Diplôme` = '$diplome', 
        `Adresse` = '$adresse', 
        `Ville` = '$ville', 
        `Code postal` = '$codePostal', 
        `N° Téléphone` = '$telephone', 
        `Grade` = '$grade', 
        `Date de nomination dans le grade` = '$dateNominationGrade', 
        `Date de titulirisation` = '$dateTitularisation', 
        `N° Poste` = '$nPoste', 
        `Département` = '$departement', 
        `Situation` = '$situation', 
        `Spécialité` = '$specialite', 
        `N° de Compte` = '$nCompte', 
        `Banque` = '$banque', 
        `Agence` = '$agence', 
        `Adr pendant les vacances` = '$adrVacances', 
        `Tél pendant les vacances` = '$telVacances', 
        `Lieu de naissance` = '$lieuNaissance', 
        `Début du Contrat` = '$debutContrat', 
        `Fin du Contrat` = '$finContrat', 
        `Type de Contrat` = '$typeContrat', 
        `NB contrat ISETSOUSSE` = '$nbContratISETSOUSSE', 
        `NB contrat Autre Etb` = '$nbContratAutreEtb', 
        `Bureau` = '$bureau', 
        `Email` = '$email', 
        `Email Interne` = '$emailInterne', 
        `NomArabe` = '$nomArabe', 
        `PrenomArabe` = '$prenomArabe', 
        `LieuNaisArabe` = '$lieuNaisArabe', 
        `AdresseArabe` = '$adresseArabe', 
        `VilleArabe` = '$villeArabe', 
        `Disponible` = '$disponible', 
        `SousSP` = '$sousSP', 
        `EtbOrigine` = '$etbOrigine', 
        `TypeEnsg` = '$typeEnsg', 
        `ControlAcces` = '$controlAcces' 
    WHERE 
        `Matricule Prof` = '$matriculeProf'";

try {
    $idcon->exec($req);
    echo "Record updated successfully";
} catch (PDOException $e) {
    echo "Error during update: " . $e->getMessage();
}
}

?>
