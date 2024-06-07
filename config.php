<?php
$servername = "localhost";
$username = "root"; 
$password = ""; 
$dbname = "bgt_sannscraft"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
