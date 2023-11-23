<?php
$host = 'localhost';
$user = 'root';
$password = 'password';
$db = 'Scolarite';

try {
    $idcom = new PDO("mysql:host=$host; dbname=$db", $user, $password);
    $idcom->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $CodeDep = $_POST['CodeDep'];
        $Departement = $_POST['Departement'];
        $Responsable = $_POST['Responsable'];
        $MatProf = $_POST['MatProf'];
        $DepartementARAB = $_POST['DepartementARAB'];

        // nchoufou les champs vide ou non 
        if (!empty($CodeDep) && !empty($Departement)) {
            $sql = "INSERT INTO Departements (CodeDep, Département, Responsable, MatProf, DepartementARAB) 
                    VALUES (:CodeDep, :Departement, :Responsable, :MatProf, :DepartementARAB)";
            
            $stmt = $idcom->prepare($sql);

            $stmt->bindParam(':CodeDep', $CodeDep, PDO::PARAM_STR);
            $stmt->bindParam(':Departement', $Departement, PDO::PARAM_STR);
            $stmt->bindParam(':Responsable', $Responsable, PDO::PARAM_STR);
            $stmt->bindParam(':MatProf', $MatProf, PDO::PARAM_STR);
            $stmt->bindParam(':DepartementARAB', $DepartementARAB, PDO::PARAM_STR);

            $stmt->execute();
            echo 'Insertion avec Succès!';
        } else {
            echo 'champs vides dans le formulaire';
        }
    }
} catch (PDOException $e) {
    echo 'Erreur : ' . $e->getMessage();
    exit();
}
?>
