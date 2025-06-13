<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars($_POST["name"]);
    $email = htmlspecialchars($_POST["email"]);
    $message = htmlspecialchars($_POST["message"]);

    $to = "devicadaeg@gmail.com"; // Replace with your email
    $subject = "New Contact Form Submission";
    $headers = "From: " . $email;

    $email_body = "Name: $name\n";
    $email_body .= "Email: $email\n";
    $email_body .= "Message:\n$message\n";

    if (mail($to, $subject, $email_body, $headers)) {
        echo "Your message has been sent!";
    } else {
        echo "There was an error sending your message.";
    }
}
?>
