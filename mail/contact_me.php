<?php 
$name = strip_tags(htmlspecialchars($_POST['name']));
$email = strip_tags(htmlspecialchars($_POST['email']));
$message = strip_tags(htmlspecialchars($_POST['message']));
$from = 'From: Sat4Techo.com'; 
$to = '19garza5028@asfm.mx'; 
$subject = 'Customer Inquiry';
$body = "From: $name\n E-Mail: $email\n Message:\n $message";

$headers .= "MIME-Version: 1.0\r\n";
$headers .= "Content-type: text/html\r\n";
$headers .= 'From: from@example.com' . "\r\n" .
'Reply-To: reply@example.com' . "\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($to, $subject, $message, $headers);
?>
