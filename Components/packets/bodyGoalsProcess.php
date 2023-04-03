<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../../vendor/autoload.php';
require __DIR__ . '../../vendor/autoload.php';

// Load environment variables from .env file
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Start the session
session_start();

// Include the database connection
include '../Login/db_connect.php';

// Build a prepared statement to retrieve the email address for the logged-in user
$user_id = $_SESSION['username'];
$stmt = $conn->prepare("SELECT fullname,email FROM tb_user WHERE name = ?");
$stmt->bind_param("s", $user_id);
$stmt->execute();
$result = $stmt->get_result();

// Retrieve the email address from the result set
if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $email = $row['email'];
    $fullname = $row['fullname'];
} else {
    $email = '';
    $fullname = '';
}

// Close the prepared statement
$stmt->close();

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    // Get the form data
    $allergies = isset($_POST['alergi']) ? $_POST['alergi'] : '';
    $health_issues = isset($_POST['penyakit']) ? $_POST['penyakit'] : '';
    $exercise_preferences = isset($_POST['olahraga']) ? $_POST['olahraga'] : '';
    $consultation_type = isset($_POST['consultation_type']) ? $_POST['consultation_type'] : '';
    $consultation_place = isset($_POST['consultation_place']) ? $_POST['consultation_place'] : '';
    $fitness_place = isset($_POST['fitness_place']) ? $_POST['fitness_place'] : '';
    
    // Build the email body
    $body = "Client information: " .$fullname . "\n\n";
    $body .= "Alergi: " . $allergies . "\n";
    $body .= "Riwayat Penyakit: " . $health_issues . "\n";
    $body .= "Olahraga yang digemari: " . $exercise_preferences . "\n\n";
    $body .= "Tentang Dokter:\n\n";
    $body .= "Tipe Konsultasi: " . $consultation_type . "\n";
    $body .= "Tempat Konsultasi: " . $consultation_place . "\n";
    $body .= "Tempat kebugaran: " . $fitness_place . "\n";

    // Send the email
    $mail = new PHPMailer(true);

    try {
        //Server settings
        $mail->isSMTP();                                            // Send using SMTP
        $mail->Host       = 'smtp.gmail.com';                       // Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   // Enable SMTP authentication
        $mail->Username   = getenv('SMTP_USERNAME');                   // SMTP username
        $mail->Password   = getenv('SMTP_PASSWORD');                     // SMTP password
        $mail->SMTPSecure = 'tls';                                   // Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` also accepted
        $mail->Port       = 587;                                    // TCP port to connect to

        //Recipients
        $mail->setFrom($email, 'New Body Goals Form Submission');
        $mail->addAddress('ultimatesolutionforhealthness@gmail.com');                  // Add a recipient

        // Content
        $mail->isHTML(false);                                        // Set email format to plain text
        $mail->Subject = 'Body Goals';
        $mail->Body    = $body;

        $mail->send();
        
        header('Location: ../../index.php');
        echo '<script>alert("Message has been sent");</script>';
    } catch (Exception $e) {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
    }

} else {
    // If the form was not submitted, redirect to the homepage
    header('Location: ./index.php');
    exit();
}
