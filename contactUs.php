<?php
/* Set e-mail recipient */
$myemail = "info@caledonsecurity.co.uk";

/* Check all form inputs using check_input function */
$name = $_POST['inputName'];
$email = $_POST['inputEmail'];
$subject = $_POST['inputSubject'];
$message = $_POST['inputMessage'];


/* Let's prepare the message for the e-mail */

$subject = "Someone has sent you a message";

$message = "

Someone has sent you a message using your contac form:

Name: $name
Email: $email
Subject: $subject

Message:
$message

";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: thanks.html');
exit();

?>