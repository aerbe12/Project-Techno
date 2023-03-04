<?php

include "db_connect.php";


// Start a session
session_start();

// Check if the form has been submitted
if(isset($_POST['submit'])) {
    
    // Get the username and password from the form
    $username = mysqli_real_escape_string($conn, $_POST['username']);
    $password = mysqli_real_escape_string($conn, $_POST['password']);
    
    // Query the database to check if the user exists
    $query = "SELECT * FROM tb_user WHERE name = '$username' AND password = '$password'";
    $result = mysqli_query($conn, $query);
    
    // Check if the query was successful
    if(mysqli_num_rows($result) == 1) {
        
        // The user exists, so set the session variables
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;
        
        // Redirect the user to the home page
        header("Location: ../../SignUp.php");
        
    } else {
        
        // The user does not exist, so display an error message
        echo "Invalid username or password";
    }
    
    // Close the database connection
    mysqli_close($conn);
}






?>