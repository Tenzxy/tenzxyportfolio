<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // Add email or database logic to process the form data
    $to = "your-email@example.com"; // Change this to your email address
    $subject = "New Contact Form Submission from $name";
    $body = "You have received a new message from $name ($email):\n\n$message";

    if (mail($to, $subject, $body)) {
        echo "Thank you for contacting us! We'll get back to you shortly.";
    } else {
        echo "Oops, something went wrong. Please try again later.";
    }
}
?>
