<?php
// Change credentials to that of your MySQL Database
$servername = "172.20.0.30";
$username = "Sensorian";
$password = "example_password";
$dbname = "SensorianHubSiteDB";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>