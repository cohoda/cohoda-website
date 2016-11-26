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
$to = 'alex@cohoda.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Cohoda Website Contact Form:  $name";
$email_body = "Name:\n\ $name\n\nEmail:\n\ $email_address\n\nPhone:\n\ $phone\n\nMessage:\n$message";
$headers = "From: ". $name ." <noreply@cohoda.com>\n";
$headers .= "Reply-To: $email_address";	
mail($to,$email_subject,$email_body,$headers);
//return true;			

header("Status: 200");

?>
