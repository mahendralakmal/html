<?php
	$connection = mysql_connect("localhost", "root", "p3roo7");
	$database = mysql_select_db("sportunleash", $connection);
	session_start();// Starting Session
	// Storing Session
	$user_check=$_SESSION['login_user'];
	// SQL Query To Fetch Complete Information Of User  
	$ses_sql=mysql_query("select userid, username from user where username='$user_check'", $connection);
	$row = mysql_fetch_assoc($ses_sql);
	$login_session =$row['username'];
	$login_id = $row['userid'];
	if(!isset($login_session)){
		mysql_close($connection); // Closing Connection
		//header('Location: index.php'); // Redirecting To Home Page
	}
?>