<?php
session_start(); // Start the session

// Check if the user is logged in
if (!isset($_SESSION['username'])) {
    header('Location: login.php'); // Redirect to login page if not logged in
    exit();
}

$usernameDB = $_SESSION['username']; 

// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "ekplog";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


header('Location: over.php');