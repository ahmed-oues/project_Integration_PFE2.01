<?php
require "connexion.php";
$code=$_POST['code'];
$req="delete from Session where numero='$code'";
$idcon->exec($req);
echo "Record deleted successfully";
header('Location: affichersession.php');?>