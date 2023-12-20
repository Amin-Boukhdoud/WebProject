<?php

$servername = "localhost";
$username = "id21694565_root";
$password = "OmarKhaled.2";
$dbname = "id21694565_localhost";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
