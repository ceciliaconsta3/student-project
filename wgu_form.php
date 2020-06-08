<?php
$sendername = $_POST['name'];
$senderemail = $_POST['email'];
$sendermessage = $_POST['message'];
$recipient = "cmccloddtesting@gmail.com";
$subject = "WGU Website Project Contact Form";
$mailheader = "From: $senderemail\n";
$mailheader .= "Reply-To: $senderemail\n\n";
$message = "Sender's name: $sendername\n";
$message = "Sender's message: $sendermessage\n\n";
mail($recipient, $subject, $message, $mailheader) or die ("Uh oh, we goofed");
header('Location: thank-you.html');
?>


