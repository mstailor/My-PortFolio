<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize it
    $name = htmlspecialchars($_POST['fn']);
    $email = htmlspecialchars($_POST['emailid']);
    $message = htmlspecialchars($_POST['msg']);

    // Set the recipient email address
    $to = "your-email@example.com"; // Replace with your email address
    $subject = "New Message from Contact Form";
    $body = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Failed to send message.";
    }
}
?>
