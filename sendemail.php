<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $contactname = $_POST["contactname"];
    $email = $_POST["email"];
    $message = $_POST["message"];
    $emailsubject = $_POST["emailsubject"];
}

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/Exception.php';
require 'PHPMailer/PHPMailer.php';
require 'PHPMailer/SMTP.php';

$mail = new PHPMailer;

$mail->isSMTP();                      // Set mailer to use SMTP 
$mail->Host = 'smtp.gmail.com';       // Specify main and backup SMTP servers 
$mail->SMTPAuth = true;               // Enable SMTP authentication 
$mail->Username = '';   // SMTP username 
$mail->Password = '';   // SMTP password 
$mail->SMTPSecure = 'tls';            // Enable TLS encryption, ssl also accepted 
$mail->Port = 587;                    // TCP port to connect to 

$mail->setFrom('markoos203@gmail.com', 'S.Park');
$mail->addReplyTo('markoos203@gmail.com', '$contactname');

// Add a recipient 
$mail->addAddress($email);

if ($emailsubject == "contactform") {
    $mail->Subject = 'We have received your request!';
} else {
    $mail->Subject = 'Email from S.Park';
}

$mail->Body = $message;

if (!$mail->send()) {
    echo 'Message could not be sent. Mailer Error: ' . $mail->ErrorInfo;
} else {
    
    header("Refresh:0; url=home.php", true, 303);
}
?>