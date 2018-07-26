<?php
// Check for empty fields
if(empty($_POST['name']) || empty($_POST['email']) || empty($_POST['phone']) || empty($_POST['message']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$headers = "From: eugeniogarzagarcia@gmail.com\r\n";
$headers .= "Reply-To: $email\r\n";
$headers .= "Return-Path: $email\r\n";
$headers .= "CC: 19martinez7395@asfm.mx\r\n";
$headers .= "BCC: 19martinez7395@asfm.mx\r\n";

// Create the email and send the message
$to = "19garza5028@asfm.mx"; // Add your email address inbetween the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = "Website Contact Form:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nPhone: $phone\n\nMessage:\n$message";
$header = "From: eugeniogarzagarcia@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.

if(!mail($to, $subject, $body, $headers))
  http_response_code(500);

?>
