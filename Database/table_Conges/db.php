<?php
define('DB_SERVER', 'localhost');
define('DB_USERMatriculeProf', 'user');
define('DB_PASSWORD', 'user');
define('DB_MatriculeProf', 'Scolarite');
 
$link = mysqli_connect(DB_SERVER, DB_USERMatriculeProf, DB_PASSWORD, DB_MatriculeProf);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>