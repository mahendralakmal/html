<?php

	session_start(); // Session start
	$error=''; // Store error message

	$encrypt_method = "AES-256-CBC";
    $skey = '!@#$';
    $siv = '@#$%';
    $key = hash('sha256', $skey);
    $iv = substr(hash('sha256', $siv), 0, 16);
	if (isset($_POST['submit'])){
		if(isset($_POST['username']) && empty($_POST['passwd'])){
			$error = "User name or Password is invalid";
		}
		else{
			// Define $username and $password
			$username=$_POST['username'];
			$passwd=$_POST['passwd'];
			// Establishing connection string to the database
			$connection = mysql_connect("localhost", "root", "p3roo7");
			// To protect MySQL injection for Security purpose
			$username = stripslashes($username);
			$passwd = stripslashes($passwd);

			$username = mysql_real_escape_string($username);
			$passwd = mysql_real_escape_string($passwd);

			$decrypted_passwd = openssl_encrypt($passwd, $encrypt_method, $key, 0, $iv);
			$decrypted_passwd = base64_encode($decrypted_passwd);

			// Selecting the database
			$database = mysql_select_db("sportunleash", $connection);
			// SQL query to fetch information of registerd users and finds user match.
			// $query = mysql_query("select * from user", $connection);
			$query = mysql_query("select * from user where passwd='$decrypted_passwd' AND username='$username'", $connection);
			$rows = mysql_num_rows($query);
			if ($rows > 0) {
				$error = "Correct";
				$_SESSION['login_user']=$username; // Initializing Session
				header("location: /sports/cricket/"); // Redirecting To Other Page
			} else {
				$error = "Username or Password is invalid";
			}
			mysql_close($connection);
		}
	}
?>