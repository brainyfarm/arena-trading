<?php
// Allow cross origin shit
header("Access-Control-Allow-Origin: *");

$email_to_send = 'juliustip@gmail.com';
$headers = "From: Arena Traders <no-reply@appfishers.com>";

// the message
$name = $_POST['name'];
$email = $_POST['email'];
$msg = $_POST['message'];

$msg = '
    From: ' . $name . '
    Email Address: ' . $email . '
    Message: ' . $msg; 

// use wordwrap() if lines are longer than 70 characters
$msg = wordwrap($msg, 70);

// send email
mail($email_to_send,"Arena: New Message", $msg, $headers);
echo 'MF000';
?>