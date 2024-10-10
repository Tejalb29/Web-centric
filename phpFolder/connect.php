<?php

$servername = "localhost";
$username = "tejalb"; // default username in XAMPP
$password = "2299"; // default password is empty
$database = "tutoring"; // your database name

// Create a connection
$conn = new mysqli($servername, $username, $password, $database);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>
