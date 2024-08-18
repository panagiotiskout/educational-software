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



    $gradeString = $_POST['grade'];
    $grade=(int)$gradeString;
    $gradeMO=(float)$grade;
    
    $stmt = $conn->prepare("UPDATE userslog SET quiz1 = ? WHERE username = ?");
    if ($stmt === false) {
        die("Insert statement preparation failed: " . htmlspecialchars($conn->error));
    }

    $stmt->bind_param("is", $grade, $usernameDB);





    //stmt1 checks if mo of user is null
            
                // Query to check if quiz1 column is NULL for the logged-in user
                $sql = "SELECT mo FROM userslog WHERE username = ? AND mo IS NULL";
                $stmt1 = $conn->prepare($sql);
                if ($stmt1 === false) {
                    die("Query preparation failed: " . htmlspecialchars($conn->error));
                }

                $stmt1->bind_param("s", $usernameDB);

                // Execute the query
                $stmt1->execute();
                $stmt1->store_result();

                // Check if any rows were returned
                if ($stmt1->num_rows > 0) {
                    echo "The mo column is NULL for user $usernameDB<br>";
                    $stmt2 = $conn->prepare("UPDATE userslog SET mo = ? WHERE username = ?");
                    if ($stmt2 === false) {
                        die("Insert statement preparation failed: " . htmlspecialchars($conn->error));
                    }

                    $stmt2->bind_param("ds", $gradeMO, $usernameDB);

                } else {
                    echo "The quiz1 column is not NULL for user $usernameDB<br>";
                    $stmt2 = $conn->prepare("UPDATE userslog SET mo = COALESCE((mo + ?) / 2, ?) WHERE username = ?");
                    if($stmt2===false){
                        die("Update statement preparation failed: " . htmlspecialchars($conn->error));
                    }
                    $stmt2->bind_param("dds",$gradeMO , $gradeMO , $usernameDB);

                    
                }
                    
   





    // Execute the query
    if ($stmt->execute() === TRUE) {
        echo "Record updated/inserted successfully<br>";
    } else {
        echo "Error executing query: " . htmlspecialchars($stmt->error) . "<br>";
    }
    if ($stmt2->execute()===TRUE){
        echo "mo updated/inserted successfully<br>";
    }
    else{
        echo "Error executing query: " . htmlspecialchars($stmt2->error) . "<br>";
    }

   
   // Debugging: Verify the number of affected rows
    if ($stmt->affected_rows > 0) {
        echo "Affected rows: " . $stmt->affected_rows . "<br>";
    } else {
        echo "No rows affected. Either the username does not exist or the grade value is the same.<br>";
    }

    $stmt->close();
    // Close the statement and connection
   $stmt1->close();
   $stmt2->close();
  

    
   header('Location: olympia.php');

$conn->close();

?>