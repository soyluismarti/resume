<?php
if(isset($_POST)['submit']))){
$name = $_POST['name'];
$phone = $_POST['phone'];
$mailFrom = $_POST['mail'];
$message = $_POST['message'];
  

$mailTo="luisalfonsomar@gmail.com";
$headers = "From:". $mailFrom; 
$txt ="You recceived a message in your website from".$name.".\n\n ". $message".\n\n ".$phone;
mail(
$mailTo, $tel, $txt, $headers);
header("Location: home.html");

}