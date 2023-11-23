<?php
require 'connexion.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $critere = $_POST["critere"]; 
    $val = $_POST["val"];
    
    // Vérifier si le champ CodeDep dans le formulaire n'est pas vide
    if (!empty($val)) {
        $req = $idcom->prepare("SELECT * FROM Departements WHERE $critere = :val");
        $req->bindParam(':val', $val, PDO::PARAM_STR);
        $req->execute();

        $count = $req->rowCount();
        if ($count > 0) {
            // Afficher les détails du département
            $departement = $req->fetch(PDO::FETCH_ASSOC);
            echo "Détails du département : <br>";
            echo "Code du département : " . $departement['CodeDep'] . "<br>";
            echo "Nom du département : " . $departement['Département'] . "<br>";
            echo "Responsable : " . $departement['Responsable'] . "<br>";
            echo "MatProf : " . $departement['MatProf'] . "<br>";
            echo "Nom du département en arabe : " . $departement['DepartementARAB'] . "<br>";
        } else {
            echo "Le département n'existe pas dans la base de données.";
        }
    } else {
        echo "Le champ de recherche est vide. Veuillez entrer une valeur pour rechercher un département.";
    }
}
?>
