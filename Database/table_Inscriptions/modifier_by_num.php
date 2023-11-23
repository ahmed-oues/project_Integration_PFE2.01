<?php
ini_set("display_errors", "1");
error_reporting(E_ALL);

require_once("config.php");
try {
    $connexion = new PDO("mysql:host=$serveur;dbname=$db", $utilisateur, $motPasse);
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    echo "Erreur de connexion : " . $e->getMessage();
}

if (isset($_GET['NumIns'])) {
    $numInscription = $_GET['NumIns'];

    $sql = "SELECT * FROM Inscriptions WHERE NumIns = :numInscription";

    try {
        $stmt = $connexion->prepare($sql);
        $stmt->bindParam(':numInscription', $numInscription, PDO::PARAM_INT);
        $stmt->execute();
        $resultat = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($resultat) {
        ?>
<!DOCTYPE html>
<html>

<head>
    <title>Modifier une Inscription</title>
    <link rel="stylesheet" href="src/css/bootstrap.min.css">
    <link rel="stylesheet" href="src/css/all.min.css">
</head>
<script src="src/js/all.min.js"></script>
<script src="src/js/bootstrap.bundle.js"></script>

<body>
    <div class="container mt-5 bg-dark">

        <h1 class="mb-4 text-danger">Ajouter une Inscription</h1>
        <form action="traitement_modif.php" method="post" onsubmit="">

            <label for="NumIns" class="form-label text-primary">Numero D' inscription :</label>
            <input type="text" id="NumIns" name="NumIns" required class="form-control"
                placeholder="Entrez numero d'inscription " value="<?php echo $resultat['NumIns'] ?>">


            <label for="CodeClasse" class="form-label text-primary">Code de la Classe :</label>
            <input type="text" id="CodeClasse" name="CodeClasse" required class="form-control"
                placeholder="Entrez le code de la classe" value="<?php echo $resultat['CodeClasse'] ?>">

            <label for="MatEtud" class="form-label text-primary">Matricule de l'Étudiant :</label>
            <input type="text" id="MatEtud" name="MatEtud" required class="form-control"
                placeholder="Entrez le matricule de l'étudiant" value="<?php echo $resultat['MatEtud'] ?>">

            <label for="Session" class="form-label text-primary">Session :</label>
            <input type="number" id="Session" name="Session" required class="form-control"
                placeholder="Entrez la session" value="<?php echo $resultat['Session'] ?>">

            <label for="DateInscription" class="form-label text-primary">Date d'Inscription :</label>
            <input type="date" id="DateInscription" name="DateInscription" class="form-control" placeholder="Sélectionnez la date d'inscription" value="<?php echo date('Y-m-d', strtotime($resultat['DateInscription'])); ?>">


            <label for="DecisionConseil" class="form-label text-primary">Decision du Conseil :</label>
            <input type="text" id="DecisionConseil" name="DecisionConseil" class="form-control"
                placeholder="Entrez la décision du conseil" value="<?php echo $resultat['DecisionConseil'] ?>">

            <label class="form-check-label text-primary">Rachat :</label>
            <br>
            <label for="Oui_Rachat" class="form-check-label text-light">Oui</label>
            <input type="radio" id="Oui_Rachat" name="Rachat" value="1" class="form-check-input" <?php if
                ($resultat['Rachat']==1) echo "checked" ; ?>>
            <label for="Non_Rachat" class="form-check-label text-light">Non</label>
            <input type="radio" id="Non_Rachat" name="Rachat" value="0" class="form-check-input" <?php if
                ($resultat['Rachat']==0) echo "checked" ; ?>>
            <br>

            <label for="MoyGen" class="form-label text-primary">Moyenne Générale :</label>
            <input type="number" step="0.01" id="MoyGen" name="MoyGen" class="form-control"
                placeholder="Entrez la moyenne générale" value="<?php echo $resultat['MoyGen'] ?>">

            <label class="form-check-label text-primary">Dispense :</label>
            <br>
            <label for="Oui_Dispense" class="form-check-label text-light">Oui</label>
            <input type="radio" id="Oui_Dispense" name="Dispense" value="1" class="form-check-input" <?php if
                ($resultat['Dispense']==1) echo "checked" ; ?>>
            <label for="Non_Dispense" class="form-check-label text-light">Non</label>
            <input type="radio" id="Non_Dispense" name="Dispense" value="0" class="form-check-input" <?php if
                ($resultat['Dispense']==0) echo "checked" ; ?>>
            <br>

            <label for="TauxAbsences" class="form-label text-primary">Taux d'Absences :</label>
            <input type="number" step="0.01" id="TauxAbsences" name="TauxAbsences" class="form-control"
                placeholder="Entrez le taux d'absences" value="<?php echo $resultat['TauxAbsences'] ?>">

            <label class="form-check-label text-primary">Redouble :</label>
            <br>
            <label for="Oui_Redouble" class="form-check-label text-light">Oui</label>
            <input type="radio" id="Oui_Redouble" name="Redouble" value="1" class="form-check-input" <?php if
                ($resultat['Redouble']==1) echo "checked" ; ?>>
            <label for="Non_Redouble" class="form-check-label text-light">Non</label>
            <input type="radio" id="Non_Redouble" name="Redouble" value="0" class="form-check-input" <?php if
                ($resultat['Redouble']==0) echo "checked" ; ?>>
            <br>

            <label for="StOuv" class="form-label text-primary">Statut Ouverture :</label>
            <input type="text" id="StOuv" name="StOuv" class="form-control" placeholder="Entrez le statut d'ouverture"
                value="<?php echo $resultat['StOuv'] ?>">

            <label for="StTech" class="form-label text-primary">Statut Technique :</label>
            <input type="text" id="StTech" name="StTech" class="form-control" placeholder="Entrez le statut technique"
                value="<?php echo $resultat['StTech'] ?>">

            <label for="TypeInscrip" class="form-label text-primary">Type d'Inscription :</label>
            <input type="text" id="TypeInscrip" name="TypeInscrip" class="form-control"
                placeholder="Entrez le type d'inscription" value="<?php echo $resultat['TypeInscrip'] ?>">

            <label for="MontantIns" class="form-label text-primary">Montant d'Inscription :</label>
            <input type="text" id="MontantIns" name="MontantIns" class="form-control"
                placeholder="Entrez le montant de l'inscription" value="<?php echo $resultat['MontantIns'] ?>">

            <label for="Remarque" class="form-label text-primary">Remarque :</label>
            <input type="text" id="Remarque" name="Remarque" class="form-control" placeholder="Ajoutez une remarque"
                value="<?php echo $resultat['Remarque'] ?>">

            <label for="Sitfin" class="form-label text-primary">Situation Financière :</label>
            <input type="text" id="Sitfin" name="Sitfin" class="form-control"
                placeholder="Entrez la situation financière" value="<?php echo $resultat['Sitfin'] ?>">

            <label for="Montant" class="form-label text-primary">Montant :</label>
            <input type="number" step="0.01" id="Montant" name="Montant" class="form-control"
                placeholder="Entrez le montant" value="<?php echo $resultat['Montant'] ?>">

            <label for="NoteSO" class="form-label text-primary">Note Service Orienté :</label>
            <input type="number" step="0.01" id="NoteSO" name="NoteSO" class="form-control"
                placeholder="Entrez la note du service orienté" value="<?php echo $resultat['NoteSO'] ?>">

            <label for="NoteST" class="form-label text-primary">Note Service Technique :</label>
            <input type="number" step="0.01" id="NoteST" name="NoteST" class="form-control"
                placeholder="Entrez la note du service technique" value="<?php echo $resultat['NoteST'] ?>">
            <br>

            <div class="mb-3">
            <input type="reset" value="Annuler" class="btn btn-danger" id="annulerButton"> 
            <input type="submit" value="Modifier l'Inscription" class="btn btn-success">
            </div>
            <br>
        </form>
    </div>
    <?php
        } else {
            echo "Aucune inscription trouvée pour ce numéro.";
        }
    } catch (PDOException $e) {
        echo "Erreur lors de l'exécution de la requête : " . $e->getMessage();
    }
} else {
    echo "Le paramètre NumIns n'a pas été spécifié dans l'URL.";
}


?>
    <script>
        document.getElementById('annulerButton').addEventListener('click', function() {
            window.location.href = 'afficher.php'; 
        });
    </script>
</body>

</html>