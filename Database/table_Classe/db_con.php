<?php
$servername = "localhost";
$username = "user";
$password = "user";
$dbname = "Scolarite";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
} //echo "Connected successfully";