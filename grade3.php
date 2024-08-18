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
    
    $stmt = $conn->prepare("UPDATE userslog SET quiz3 = ? WHERE username = ?");
    if ($stmt === false) {
        die("Insert statement preparation failed: " . htmlspecialchars($conn->error));
    }

    $stmt->bind_param("is", $grade, $usernameDB);
  // Execute the query
  if ($stmt->execute() === TRUE) {
    echo "Record updated/inserted successfully<br>";
} else {
    echo "Error executing query: " . htmlspecialchars($stmt->error) . "<br>";
}
$stmt->close();

    $stmtQ = $conn->prepare("SELECT quiz1, quiz2 FROM userslog WHERE username = ?");
    if ($stmtQ === false) {
        die("Select statement preparation failed: " . htmlspecialchars($conn->error));
    }
    
    $stmtQ->bind_param("s", $usernameDB);
    $stmtQ->execute();
    
    // Bind result variables
    $stmtQ->bind_result($q1, $q2);
    
    // Fetch results into variables
    if ($stmtQ->fetch()) {
        // Use the fetched values
        echo "Fetched values: quiz1 = " . $q1 . ", quiz2 = " . $q2;
    } else {
        echo "No data found for the given condition.";
    }
    
    $stmtQ->close(); // Close the statement when done


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
                    $stmt2 = $conn->prepare("UPDATE userslog SET mo = COALESCE(($q1+ $q2 + ?) / 3, ?) WHERE username = ?");
                    if($stmt2===false){
                        die("Update statement preparation failed: " . htmlspecialchars($conn->error));
                    }
                    $stmt2->bind_param("dds",$gradeMO , $gradeMO , $usernameDB);

                    $sql2 = "SELECT mo FROM userslog WHERE username = ?";

                    if ($stmt5 = $conn->prepare($sql2)) {
                        // 2. Bind the parameter
                        $stmt5->bind_param("s", $usernameDB); // "s" denotes the type of the parameter (string in this case)
                        
                       
                    
                        // 3. Execute the statement
                        $stmt5->execute();
                        
                        // 4. Bind the result to a variable
                        $stmt5->bind_result($mo);
                        
                        // 5. Fetch the result
                        if ($stmt5->fetch()) {
                            $mesos = (int)$mo;
                            
                            // 6. Check the value of $mesos
                            if ($mesos > 6) {
                                header('Location: over.php');
                                exit(); // Ensure no further code is executed after the redirect
                            }
                        }
                        
                        // Close the statement
                       
                    } else {
                        // Handle errors in preparing the statement
                        echo "Error preparing statement: " . $conn->error;
                    }
                    
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

    
    // Close the statement and connection
   $stmt1->close();
   $stmt2->close();
   $stmt5->close();

   header('Location: olympia.php');
    

$conn->close();

?>