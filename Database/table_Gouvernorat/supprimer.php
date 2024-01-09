<?php
include_once "connexion.php";
if (isset($_GET['Gouv'])) {
  $Gouv = $_GET['Gouv'];

  $sql = "DELETE FROM gouvernorats WHERE Gouv = ?";
  $result = $con->prepare($sql);

  if ($result) {

    $result->bind_param("s", $Gouv);
    $result->execute();
    $result->close();

    header("Location:index.php");
  } else {
    echo "Erreur de préparation de la requête : " . $con->error;
  }
}
