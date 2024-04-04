<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get the form fields
    $email = $_POST["email"];

    // Email information
    $to = "keterel8@gmail.com"; // Enter your email address here
    $subject = "New Form Submission";
    $message = "Email: $email";

    // Send email
    if (mail($to, $subject, $message)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Oops! Something went wrong.";
    }
}
?>
