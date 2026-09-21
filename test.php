<?php
$to = "bt23resch11018@iith.ac.in"; // Replace with your email address
$subject = "Test Email";
$message = "This is a test email to verify the mail() function.";
$headers = "From: subashani0104@gmail.com"; // Replace with a valid email address from your domain

if (mail($to, $subject, $message, $headers)) {
    echo "Email sent successfully.";
} else {
    echo "Failed to send email.";
}
?>

