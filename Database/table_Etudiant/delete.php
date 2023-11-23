<?php
     $id = $_GET['NCIN'];
     require_once 'CRUDfonctons.php';
     deleteData($id);
     header("location: showAllletudiants.php");
