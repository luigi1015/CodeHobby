<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$message = $_POST['message'];

	$emailMessage = "From: " . $name . "\nEmail: " . $email . "\nPhone: " . $phone . "\nMessage:\n" . $message;
	$recipient = "j@codehobby.net";
	$subject = "CodeHobby.net Contact Form";
	$mailHeader = "From: " . $email;
	mail( $recipient, $subject, $emailMessage, $mailHeader );
	
	header( 'Location: http://www.codehobby.net' ) ;
?>
