<?php
// Start session
session_start();

// Check if user is already logged in
if (!isset($_SESSION['username'])) {
    // Redirect user to login page
    header("Location: ../../login.php");
    exit();
}

// Check if logout button was clicked
if (isset($_POST['logout'])) {
    // Unset session variables
    session_unset();
    // Destroy session
    session_destroy();
    // Redirect user to login page
    header("Location: ../../login.php");
    exit();
}
?>