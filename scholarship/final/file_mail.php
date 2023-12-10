<?php
// Include PHPMailer library
require 'path/to/phpmailer/PHPMailer.php';
require 'path/to/phpmailer/SMTP.php';
require 'path/to/phpmailer/Exception.php';

// Server-side function to send an email
function sendEmail($to, $subject, $message) {
    // SMTP configuration
    $mail = new PHPMailer\PHPMailer\PHPMailer();
    $mail->isSMTP();
    $mail->Host = 'smtp.example.com'; // Replace with your SMTP server address
    $mail->SMTPAuth = true;
    $mail->Username = 'your-email@example.com'; // Replace with your SMTP username
    $mail->Password = 'your-password'; // Replace with your SMTP password
    $mail->SMTPSecure = 'tls';
    $mail->Port = 587;

    // Email content
    $mail->setFrom('your-email@example.com', 'Your Name'); // Replace with your email address and name
    $mail->addAddress($to); // Recipient email address
    $mail->Subject = $subject;
    $mail->isHTML(true);
    $mail->Body = $message;

    // Send the email
    if ($mail->send()) {
        return true; // Email sent successfully
    } else {
        return false; // Failed to send email
    }
}

// Function to load email content from HTML file
function loadEmailContent($filename) {
    ob_start();
    include $filename;
    $content = ob_get_clean();
    return $content;
}

// Example usage
$to = 'recipient@example.com';
$subject = 'Test Email';
$message = loadEmailContent('path/to/email-template.html');
if (sendEmail($to, $subject, $message)) {
    echo 'Email sent successfully.';
} else {
    echo 'Failed to send email.';
}
?>
