<?php
if(isset($_POST['submit'])) {
    // Get form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
    $recipient_email = $_POST['recipient_email'];

    // Email subject
    $subject = "New Message from $name";

    // Email content
    $email_content = "Name: $name\n";
    $email_content .= "Email: $email\n\n";
    $email_content .= "Message:\n$message\n";

    // Email headers
    $headers = "From: $name <$email>";

    // Send email
    if(mail($recipient_email, $subject, $email_content, $headers)) {
        echo "Message sent successfully.";
    } else {
        echo "Error sending message.";
    }
}
?> 
