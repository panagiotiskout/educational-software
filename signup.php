<?php
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

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
   


    // Hash the password before storing it
    $hashed_password = hash('sha256', $password);

    $stmt = $conn->prepare("INSERT INTO userslog (first_name, last_name, username, psw, email) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssss", $first_name, $last_name, $username, $hashed_password, $email);

    // Execute the query
    if ($stmt->execute() === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $stmt->error;
    }

    // Close the statement and connection
    $stmt->close();
    $conn->close();
    
    header("Location: arxiki.php");
}
?>