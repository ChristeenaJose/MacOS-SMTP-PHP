<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Load Composer dependencies

$mail = new PHPMailer(true);

try {
    // SMTP Configuration
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'christyjose.m.j@gmail.com'; // Replace with your Gmail
    $mail->Password = 'xfrq lhpq zngn gdlo';   // Use the App Password generated in Step 2
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port = 587;

    // Sender and Recipient
    $mail->setFrom('christyjose.m.j@gmail.com', 'Your Name');
    $mail->addAddress('christyjose.m.j@gmail.com'); // Replace with recipient's email

    // Email Content
    $mail->isHTML(true);
    $mail->Subject = 'Test Email from PHPMailer';
    $mail->Body    = '<h3>Hello, this is a test email sent via Gmail SMTP using PHPMailer!</h3>';

    $mail->send();
    echo "✅ Email sent successfully!";
} catch (Exception $e) {
    echo "❌ Email could not be sent. Error: {$mail->ErrorInfo}";
}
?>
