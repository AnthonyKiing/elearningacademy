<?php require_once('DB_connection.php');
?>

<html>
<head>
<head>
<link rel="stylesheet" type="text/css" href="style3.css">
	<title></title>
</head>
<body>
	<div class="buttonclass">
		<a href="homeforstudents.php"><img src="back.png"></a>
	</div>

	<center>
	<div class="picture3">
		<img src="77.jpg">
	</div>

	<div class= "englishbuttons" id="homenavi3">
		<a href="Streamenglish.php">STREAM</a>
		<a href="englishclassmates.php">CLASSMATES</a>
		<a href="contact.php">ACHIEVEMENTS</a>
	</div>
	</center>

	<form action="accept-file.php" method="post" enctype="multipart/form-data">
	<input type="file" name="activities" />
	<input type="submit" name="submit" value="submit"/>
	</form>

	<?php
		 //$_SESSION['message'] = '';
		 // $connection = mysqli_connect('localhost','root','','newusers');
		 //if (mysqli_connect_errno()) {
		 //   die(mysqli_connect_error());
		// }

	// if(isset($_FILES['activities']['name']))
	// {
	// $_FILES['field_name']['name'];
	// $_FILES['field_name']['size'];
	//  $_FILES['field_name']['type'];
	// $_FILES['field_name']['tmp_name'];


	 //	if(!$_FILES['activities']['error'])

	 //	$new_file_name=strtolower($_FILES['activities']['tmp_name']);
	 //	if ($_FILES['activities']>(1024000)) {
	 		
	 //		$valid_file="false";
	 //		$message="oops";
	 //	}
	 	//if($valid_file){
	 	//	move_uploaded_file(['activities']['tmp_name'], 'uploads/'.$new_file_name);
	 	//	$message="congratulations";
	 //	}



	 //else
	// {
	 //	$message='oops!:'.$_FILES['activities']['error'];
	// }

		// }

	//	if (!empty($_SESSION['myfile'])) {
		//	$myfile=$_FILES['myfile'];

		//	if ($myfile['error']!==UPLOAD_ERR_OK) {
			//	echo"<p>An error occured</p>";
			//	exit();
			//}

			//$name=preg_replace("[^A-Z0-9_-]/i","_", $myfile['name']);
			//$i=0;
			//$parts= pathinfo($name);
			//while (file_exists(UPLOAD_DIR.$name)) {
			//	$i++;
			//	$name=$parts['filename'].'_'.$i.'.'.$parts['extension'];
			//}

		//$success=move_uploaded_file($myfile,['tmp_name'],UPLOAD_DIR.$name);
			//if (!$success) {
			//	echo "<p> Unable to save file</p>";
			//	exit();
			//}
			//	chmod(UPLOAD_DIR,$name,0644);
	//}


	

	?>



</body>
</html>