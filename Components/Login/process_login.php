<?php
require "db_connect.php";
// Start a session
session_start();

require __DIR__ . '../../../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

$smtp_username = $_ENV['SMTP_USERNAME'];
$smtp_password = $_ENV['SMTP_PASSWORD'];

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

// Check if the form has been submitted
if(isset($_POST['submit'])) {
    
    // Get the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    // Prepare the SQL statement
    $stmt = mysqli_prepare($conn, "SELECT id_user, email FROM tb_user WHERE name = ? AND password = ?");
    
    // Bind the parameters to the statement
    mysqli_stmt_bind_param($stmt, "ss", $username, $password);
    
    // Execute the statement
    mysqli_stmt_execute($stmt);
    
    // Store the result
    $result = mysqli_stmt_get_result($stmt);
    
    // Check if the query was successful
    if(mysqli_num_rows($result) == 1) {
        // The user exists, so set the session variables
        $row = mysqli_fetch_assoc($result);
        $_SESSION['id_user'] = $row['id_user'];
        $_SESSION['username'] = $username;
        $_SESSION['loggedin'] = true;
        
        // Generate an OTP
        $otp = rand(100000, 999999);
        
        // Store the OTP in the session
        $_SESSION['otp'] = $otp;
        
        // Send the OTP to the user's email
        $mail = new PHPMailer(true);
        try {
            //Server settings
            $mail->SMTPDebug = 2;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                       //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username = $smtp_username;                   //SMTP username
            $mail->Password   = $smtp_password;                    //SMTP password
            $mail->SMTPSecure = 'tls';            //Enable implicit TLS encryption
            $mail->Port       = 587;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`
        
            //Recipients
            $mail->setFrom('your_email@gmail.com', 'Ultimate Solution');
            $mail->addAddress($row['email']);     //Add a recipient
        
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'OTP Verification';
            $mail->Body = "Kami telah menerima permintaan login untuk akun Anda. Silakan gunakan kode One-Time Password (OTP) berikut untuk masuk: 
            <strong>$otp</strong>. Kode ini berlaku selama 10 menit ke depan.
            Untuk menjaga keamanan akun Anda, mohon jangan berbagi kode ini dengan siapapun. Jika Anda tidak meminta kode OTP ini, mohon abaikan pesan ini dan segera ubah kata sandi Anda.
            Terima kasih atas kerjasamanya.";
        
            $mail->send();
            
            // Redirect the user to the OTP verification page
            header("Location: ../../otp.php");
        } catch (Exception $e) {
            // The email could not be sent, so display an error message
            echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
        }
    } else {
        // The user does not exist, so display an error message
        echo "<script>alert('Invalid username or password');</script>";
    }
    
    // Close the statement and the database connection
    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
