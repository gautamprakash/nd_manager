<?php

$servername = "localhost";
$username = "nd_citizen";
$password = "rb_citizen";
$dbname = "ndmanager";
$table = "data";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$conn->close();

?>