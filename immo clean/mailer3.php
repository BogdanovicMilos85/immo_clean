

<?php

if(isset($_POST['send'])) {

	if(isset($_POST['name']) && !empty($_POST['name'])) {
		$email = filter_var(trim($_POST["name"]), FILTER_SANITIZE_STRING);
	} else {
		header("Location: http://www.immoclean.org/kontakt.php?email=-1#contact_form");
    	exit;
	}

	if(isset($_POST['email']) && !empty($_POST['email'])) {
		$email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
	} else {
		header("Location: http://www.immoclean.org/kontakt.php?email=-1#contact_form");
    	exit;
	}

	if(isset($_POST['message']) && !empty($_POST['message'])) {
		$message = filter_var(trim($_POST["message"]), FILTER_SANITIZE_STRING);
	} else {
		header("Location: http://www.immoclean.org/kontakt.php?message=-1#contact_form");
    	exit;
	}

}



	$recipient = "stefanparovic@yahoo.com";

	$subject = "Contact Form Message";


	$email_content .= "Name: $name\n\n";
	$email_content .= "Email Address: $email\n\n";
	$email_content .= "Message: \n$message\n";

	$email_headers = "From: <$email>";

	$send = mail($recipient, $subject, $email_content, $email_headers);

	if($send) {
		header("Location: http://www.immoclean.org/kontakt.php?success=1#contact_form");
		exit;
	} else {
		header("Location: http://www.immoclean.org/kontakt.php?success=-1#contact_form");
		exit;
	}

?>
