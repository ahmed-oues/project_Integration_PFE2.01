<?php
//connexion à la base de données
$con = mysqli_connect("localhost", "user", "user", "Scolarite");
if (!$con) {
  echo "Vous n'êtes pas connecté à la base de donnée";
}
?>