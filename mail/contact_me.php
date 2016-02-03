<?php
// Check for empty fields
if(empty($_POST['name'])  		||
   empty($_POST['email']) 		||
   empty($_POST['phone']) 		||
   empty($_POST['message'])	||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
	echo "No arguments Provided!";
	return false;
   }

$name = $_POST['name'];
$email_address = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['message'];

// Create the email and send the message
$to = 'duncan@glass-guard.com'; // Your email address.
$and = 'sonya@glass-guard.com';
$email_subject = "Website Contact Form:  $name";
$contact_subject = "Glass Guard";
$email_body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email_address\n\nPhone: $phone\n\nMessage:\n$message";
$contact_message = "Thank you for contacting Glass Guard. We will respond to your inquiry shortly.";
$headers = "From: noreply@glass-guard.com\n"; // This is the email address the generated message will be from.
$headers .= "Reply-To: $email_address";
mail($to,$email_subject,$email_body,$headers);  // email to glass-guard
mail($and,$email_subject,$email_body,$headers);  // email to glass-guard
mail($email,$contact_subject,$contact_message,$headers); // email to sender
return true;
?>