<?php
$servername = 'localhost';
$username = 'test';
$password = 'test';

// Create connection
$conn = new mysqli($servername, $username, $password);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$conn->close();
?>