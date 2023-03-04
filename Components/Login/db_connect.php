<?php
$servername = "localhost"; // Change this to your server name if necessary
$username = "root"; // Change this to your database username
$password = ""; // Change this to your database password
$dbname = "db_account_us"; // Change this to your database name

// Create a connection to the database
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check if the connection was successful
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>