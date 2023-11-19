<?php
require "connexion.php";
$code=$_POST['code'];
$req="delete from session where numero='$code'";
$idcon->exec($req);
echo "Record deleted successfully";
header('Location: affichersession.php');?>