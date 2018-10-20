<?php
$name = $_POST['name'];
$email = $_POST['email'];
$comment = $_POST['comment'];

$to = "rhamgunnerm@gmail.com";
$subject = "Request";
$body = "Message from someone";

mail($to, $subject, $body);

echo "Message sent!<a href='http://rpxpizza.000webhostapp.com'>MAIN PAGE<a/>";
	?> 