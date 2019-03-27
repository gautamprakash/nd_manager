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

if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $description=$_POST['description'];
    $lat=$_POST['lat'];
    $lon=$_POST['lon'];
    $image=$_POST['image'];
    $sql = "INSERT INTO data (category, name, description, lat, lon, image)
    VALUES ('$category', '$name', '$description', '$lat', '$lon', '$image')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}



?>