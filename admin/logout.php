<?php
	session_start();
	if(session_destroy()) // Destroying All Sessions
	{
		header("Location: /admin/"); // Redirecting To Home Page
	}
?>