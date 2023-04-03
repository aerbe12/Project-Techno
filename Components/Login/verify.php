<?php
session_start();

// Check if the OTP form has been submitted
if(isset($_POST['submit'])) {

    // Get the OTP entered by the user
    $otp_entered = $_POST['otp'];

    // Get the OTP generated earlier and stored in the session
    $otp_generated = $_SESSION['otp'];

    // Check if the OTP entered by the user matches the one generated earlier
    if($otp_entered == $otp_generated) {
        // The OTP is correct, so set the session variable to indicate that the user is logged in
        $_SESSION['loggedin'] = true;

        // Redirect the user to the homepage
        header("Location: ../../index.php");
    } else {
        // The OTP is incorrect, so display an error message
        echo "<script>alert('Invalid OTP');</script>";
    }
}
?>
