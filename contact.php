<?php

$name= $_Post['name'];
$visitor_email= $_Post['name'];
$phone= $_Post['phone'];
$company= $_Post['company'];
$message= $_Post['message'];

$email_from = 'luisalfonsomar@gmail.com';
$email_subject ="New form submission";
$email_body="Username: $name.\n".
"Username: $name.\n".
"Visitor Email: $visitor_email.\n";
"User message: $message\n"
"Phone:"

$to ="luisalfonsomar@gmail.com";
$headers="from: $email_from \r\n";
$headers ="Reply_to: $visitor_email \r\n";
mail($to,$email_subject,$email_body,$headers);
header (Location: home.html)

?>