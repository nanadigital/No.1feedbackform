<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the form data
    $rating = $_POST['rate'];
    $feedback = $_POST['feed'];
    $content = "Rating: $rating\nFeedback: $feedback";

    // Send email using Gmail SMTP
    $to = "nardos2739@gmail.com"; // Replace with your email address
    $subject = "Feedback Form Submission";
    $headers = "From: nardos2739@gmail.com"; // Replace with your email address
    $result = mail($to, $subject, $content, $headers);

    if ($result) {
        echo "Thank you for your feedback! We have received your submission.";
    } else {
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
