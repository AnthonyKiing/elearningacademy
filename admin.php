
	<?php
	session_start();
	define(ADMIN,$_SESSION['name']);//get the username from the previously registered and super global variable
	if(!session_is_registered("admin")){//if session not registered
		header("location:login.php");// redirect to login.php page
	}

	else // continue to current page
	header('Content-Type:text/html; charset=utf-8');
	?>
	<html>
	<head></head>
	<body>
	 welcome to admin Page
	 <?php
	echo admin

	?>
	</body>
	</html>