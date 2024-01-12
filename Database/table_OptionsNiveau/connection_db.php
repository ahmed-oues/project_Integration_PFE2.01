<?php
$servername = "localhost";
$username = "user";
$password = "user";
$dbname = "scolarite";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}