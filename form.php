<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    $to = 'starbonsaiart@gmail.com'; 
    $subject = 'New Contact Form Submission';
    $body = "Name: $name\nEmail: $email\n\n$message";
    $headers = "From: $email";


    if (mail($to, $subject, $body, $headers)) {
        echo '<p>Your message has been sent successfully!</p>';
    } else {
        echo '<p>Sorry, there was an error sending your message.</p>';
    }
}
?>