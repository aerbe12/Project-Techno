<?php

include "db_connect.php";


// Start a session
session_start();

// Check if the form has been submitted
if(isset($_POST['submit'])) {
    
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, "SELECT * FROM tb_user WHERE name = ? AND password = ?");
    
    // Bind the parameters to the statement
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    
    // Execute the statement
    mysqli_stmt_execute($stmt);
    
    // Store the result
    $result = mysqli_stmt_get_result($stmt);
    
    // Check if the query was successful
    if(mysqli_num_rows($result) == 1) {
        // The user exists, so set the session variables
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;
        
        // Redirect the user to the home page
        header("Location: ../../SignUp.php");
    } else {
        // The user does not exist, so display an error message
        echo "<script>alert('Invalid username or password');</script>";
        
    
    
}

// Close the statement and the database connection
mysqli_stmt_close($stmt);
mysqli_close($conn);
}

?>