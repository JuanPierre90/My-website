<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Set the recipient email address
    $to = "carlsonspcrepair@gmail.com"; // Replace with your actual email address

    // Set the email subject
    $subject = "New Message from $name";

    // Build the email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Send the email
    if (mail($to, $subject, $email_content)) {
        echo "Email sent successfully.";
    } else {
        echo "Error: Email sending failed.";
    }
} else {
    echo "Error: Invalid request.";
}
?>
