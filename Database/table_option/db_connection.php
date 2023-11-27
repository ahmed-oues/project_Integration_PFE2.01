<?php
$servername = "localhost";
$username = "user";
$password = "user";
$db_name = "scolarite"; // Update this line with your actual database name
$conn = new mysqli($servername, $username, $password, $db_name);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
