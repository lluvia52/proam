<?php
$name=$_POST['name'];
$email=$_POST['email'];
$message=$_POST['comment'];
$formcontent=" De: $name \n Teléfono: $phone \n Comentario: $message";
$recipient = "rosales.lluvia@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
header('Location: /index.html');
?>