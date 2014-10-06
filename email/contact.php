<?php
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];

	$from = "From: enquiry@sportunleash.com";
	$cc = "CC: mahendralakmal@gmail.com";
	$subject = "Comment / enquiry" ;

	$body = "From: $name\n E-Mail: $email\n Message:\n $message";

	$to = "info@sportunleash.com";

	$headers = $from . "\r\n" . $cc;

	if(mail($to,$subject,$body,$headers)){
		header("Location: ../index.html?success=1");
	}else{
		header("Location: ../index.html?success=0");
	}
?> 