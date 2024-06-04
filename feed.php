<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color: black;">
<?php



use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

require 'phpmailer/src/Exception.php';
require 'phpmailer/src/PHPMailer.php';
require 'phpmailer/src/SMTP.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    
    // $rating = $_POST['rate']; // Assuming you want to capture the rating
    $feedback = $_POST['feed'];

    // Gmail SMTP configuration
    $to = 'nardos2739@gmail.com'; // Change this to your recipient email address
    $subject = 'Feedback Form Submission';
    $message = 'Feedback: ' . $feedback;
    // $message = 'Rating: ' . $rating . "\r\n\r\n" . 'Feedback: ' . $feedback;


    // Send email using Gmail SMTP
    // require 'PHPMailer/PHPMailerAutoload.php'; // Assuming you have PHPMailer library
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host = 'smtp.gmail.com';
    $mail->Port = 587;
    $mail->SMTPAuth = true;
    $mail->Username = 'nardos2739@gmail.com'; // Your Gmail email address
    $mail->Password = 'ihej csdo nloz gcdz'; // Your Gmail password
    $mail->setFrom('nardos2739@gmail.com', 'Feedback Form');
    $mail->addAddress($to);
    $mail->Subject = $subject;
    $mail->Body = $message;

    if (!$mail->send()) {
        echo 'Message could not be sent.';
        echo 'Mailer Error: ' . $mail->ErrorInfo;
    } else {
        echo 'Message has been sent';
    }
}
echo"
    <script>
    document.location.href= 'index.html';
    </script>"

?>

</body>
</html>
