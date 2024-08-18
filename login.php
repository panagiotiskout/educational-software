<?php
session_start();

echo '<pre>';
print_r($_POST);
echo '</pre>';

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


// Database connection
$servername = "localhost"; // or your server name
$dbusername = "root"; // your database username
$dbpassword = ""; // your database password
$dbname = "ekplog"; // your database name

$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$username = $_POST['username'];
$password = $_POST['password'];

if (isset($username) && isset($password)) {

    $hashed_password = hash('sha256', $password);

    $sql = "SELECT * FROM userslog WHERE username = ? AND psw = ?";
    $stmt = $conn->prepare($sql);
    if ($stmt === false) {
        die("Prepare failed: " . $conn->error);
    }

    $stmt->bind_param("ss", $username, $hashed_password);
    $stmt->execute();
    $result = $stmt->get_result();


    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['username'] === $username && $row['psw'] === $hashed_password) {
            echo "Logged in!";
            $_SESSION['username'] = $username;



            header("Location: courses.php");
            exit();
        } else {
            header("Location: index332.php?error=Incorrect username or password");
            exit();
        }
    } else {
        header("Location: index.php?error=Incorrect username or password");
        exit();
    }

    // Close statement
    $stmt->close();
} else {
    header("Location: index5.php?error=Please fill in all fields");
    exit();
}

// Close connection
$conn->close();