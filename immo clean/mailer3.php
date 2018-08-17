<?php

    // Get the form fields, removes html tags and whitespaces.

    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    $message = trim($_POST["message"]);

    // Check the data.
    if ( empty($message) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: http://www.beogal.com/index.php?success=-1#form");
        exit;
    }

    // Set the recipient email address. Update this to your desired email address.
    $recipient = "beogal11000@gmail.com";

    // Set the email subject.
    $subject = "Contact Form Message";

    // Build the email content.

    $email_content .= "Email: $email\n";

    $email_content .= "Message: \n$message\n";

    // Build the email headers.
    $email_headers = "From: <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);

    // Redirect to the index.html page with success code
    header("Location: http://www.beogal.com/index.php?success=1#form");


?>
