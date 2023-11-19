<?php
require "db_connection.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $matriculeProf = $_POST['matriculeProf'];

    // Check si matricule prof existe ou non
    $checkMatriculeQuery = "SELECT COUNT(*) FROM Prof WHERE `Matricule Prof` = :matriculeProf";
    $stmt = $idcon->prepare($checkMatriculeQuery);
    $stmt->bindParam(':matriculeProf', $matriculeProf);
    $stmt->execute();
    $count = $stmt->fetchColumn();

    if ($count > 0) {
        echo "Le professeur avec le Matricule Prof $matriculeProf existe déjà.";
    } else {
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

$req = "INSERT INTO Prof (`Matricule Prof`, `Nom`, `Prénom`, `CIN ou Passeport`, `Identifiant CNRPS`, `Date de naissance`, `Nationalité`, `Sexe (M/F)`, `Date Ent Adm`, `Date Ent Etbs`, `Diplôme`, `Adresse`, `Ville`, `Code postal`, `N° Téléphone`, `Grade`, `Date de nomination dans le grade`, `Date de titulirisation`, `N° Poste`, `Département`, `Situation`, `Spécialité`, `N° de Compte`, `Banque`, `Agence`, `Adr pendant les vacances`, `Tél pendant les vacances`, `Lieu de naissance`, `Début du Contrat`, `Fin du Contrat`, `Type de Contrat`, `NB contrat ISETSOUSSE`, `NB contrat Autre Etb`, `Bureau`, `Email`, `Email Interne`, `NomArabe`, `PrenomArabe`, `LieuNaisArabe`, `AdresseArabe`, `VilleArabe`, `Disponible`, `SousSP`, `EtbOrigine`, `TypeEnsg`, `ControlAcces`)
VALUES ('$matriculeProf', '$nom', '$prenom', '$cinPasseport', '$identifiantCNRPS', '$dateNaissance', '$nationalite', '$sexe', '$dateEntAdm', '$dateEntEtbs', '$diplome', '$adresse', '$ville', '$codePostal', '$telephone', '$grade', '$dateNominationGrade', '$dateTitularisation', '$nPoste', '$departement', '$situation', '$specialite', '$nCompte', '$banque', '$agence', '$adrVacances', '$telVacances', '$lieuNaissance', '$debutContrat', '$finContrat', '$typeContrat', '$nbContratISETSOUSSE', '$nbContratAutreEtb', '$bureau', '$email', '$emailInterne', '$nomArabe', '$prenomArabe', '$lieuNaisArabe', '$adresseArabe', '$villeArabe', '$disponible', '$sousSP', '$etbOrigine', '$typeEnsg', '$controlAcces')";


    try {
        $idcon->exec($req);
        echo "<script>
            window.location.href = 'Read.php';
          </script>";
    } catch(PDOException $e) {
        echo "Erreur lors de l'insertion : " . $e->getMessage();
    }
    }}
?>
