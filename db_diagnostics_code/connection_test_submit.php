<?php

$servername = "localhost";
$username = "nd_citizen";
$password = "rb_citizen";
$dbname = "ndmanager";
$table = "data";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO data (category, name, description, lat, lon, image, upvotes)
VALUES ('1', 'Waste','recycle your garbage here', '12.9228', '77.5932', 'test', '1')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();

?>