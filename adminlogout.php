	<?php
	session_start();//start the current session
	session_destroy();//destroy it , log out now
	header("location:login.php?msg=Successfully Logged out");//move back to log in
	?>