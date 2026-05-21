<?php
$dbHost = "localhost";
$dbUser = "root";
$dbPassword = "";
$dbname = "crud app";

$conn = new mysqli($dbHost, $dbUser, $dbPassword, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>