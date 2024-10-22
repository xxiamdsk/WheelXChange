<?php
// Database connection parameters
$servername = "127.0.0.1"; 
$username = "root";
$password = "1234"; 
$dbname = "vrs"; 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} else {
    // echo "Connected successfully";
}

$conn->set_charset("utf8");
