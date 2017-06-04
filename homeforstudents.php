<?php require_once('DB_connection.php');
?>


<html>
<head>
	<link rel="stylesheet" type="text/css" href="style2.css">
	<title></title>
</head>
  
<body>
<center>

	<div class= "homeforstudents" id="homenavi">
		<a href="homeforstudents.php">HOME</a>
		<a href="about.php">ABOUT</a>
		<a href="ContactUs.html">CONTACT US</a>

		
	<div class="logout" id="home2navi">
	 	<?php //
		  
		  
		//session_start();//session is a way to store information (in variables) to be used across multiple pages.  
		//session_destroy();  
		//header("Location: login.php");//use for the redirection to some page  
		 ?>
		<a href ="login.php">LOG OUT</a>

	</div>
	</div>



	<div id="container" class="containers">

	<div id="English">
		<a href="Streamenglish.php"><img src="english1.png"></a>
	</div>

	<div id="Math">
		<a href="Streammath.php"><img src="math2.png"></a>
		</div>

	<div id="Science">
		<a href="Streamscience.php"><img src="science2.png"</a>
	</div>
	</div>

	</center>

	<div class="picturecircle">
  		<img src="city.png">

	</div>

</body>
</html>