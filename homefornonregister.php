<?php require_once('DB_connection.php');
?>

<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
  
<body>
	<div class= "homeforhome" id="homenavi">
		<a href="homefornonregister.php">HOME</a>
		<a href="about.php">ABOUT</a>
		<a href="ContactUs.html">CONTACT US</a>

	<div class="loginandsignin" id="home2navi">
	   	<a href="signin.php">SIGN UP</a>
		<a href ="login.php">LOGIN</a>

	</div>
	</div>

	<br>

	<div class ="Image" id="homeImage">
	</div>

	<div class="afterImage">

	</div>

	<div class="comeon">
    <p class="comewords">
		Come help us build the education the world deserves
	</p>
	<p class="want">
		Want to join us?
	</p>
	</div>

	<div class="afterImage2">

	</div>

	<div class="afterImage2words">
	<p class="practice">
	Practice what you've learned through quizzes and<br> interactive activities.This style of practicing will allow <br>you to retain information you've learned so you can<br> apply it to your own future subjects.
	</p>
	<p class="howelearning">
	<b>How can ELearning help you?</b>
	</p>
	<p class="hereby">
	Here by giving activities and lesson to help<br> your career develop
	more and easy to understand<br> lesson can give a student a willingness to study.

	<p class="practice2">
	  <b>Practice</b>
	</p>

	</p>
	</div>

	<div class="whitepadding3">
	
	</div>


	<p class="forever">
		&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<b>You can learn anything. <br>
     	For free. For everyone. Forever.</b>
	</p>


	<div class="buttonbox">
	<a class="button1" href="#popup1">Sign In</a>
	</div>

	<div id="popup1" class="overlay">
	<div class="popup">
	
	<a class="close" href="#">&times;</a>
   	
	


		<?php
		  session_start();
		  $_SESSION['message'] = '';
		  $connection = mysqli_connect('localhost','root','','newusers');
		  if (mysqli_connect_errno()) {
		     die(mysqli_connect_error());
		  }

		if(isset($_POST['submit']))
		{
		  $firstname=$_POST['Nme'];
		  $surname=$_POST['Srnme'];
		  $email=$_POST['email'];
		  $username=$_POST['usrnme'];
		  $password=$_POST['psw'];
		  $repeatpass=$_POST['pswrepeat'];
		  $gender=$_POST['Gender'];
		  $Bday=$_POST['Bday'];


		if ($password==$repeatpass) {

		$query="INSERT INTO users(Nme,Srme,email,usrnme,psw,Gender,Bday) VALUES('$firstname','$surname','$email','$username','$password','$gender','$Bday')";


		   echo " ";


		if(mysqli_query($connection,$query))
		{
		echo"you are now registered ";

		}
		}
		else
		{
		  echo"invalid password"; 
		  $_SESSION['message'] = "Username or Password is Incorrect";
		}

		}

		  ?>



  	<form method ="POST" action="">
    <div class="containers1">     
    <div class="bepart2">
    <img src="bepart2.png">
  	</div> 
      <input type = "textx" placeholder= "First Name" name ="Nme" required><br>

      <input type = "textx" placeholder= "Surname" name ="Srnme" required><br>

      <input type="textx" placeholder="Enter Email" name="email" required><br>

      <input type="textx" placeholder="Username" name="usrnme" required><br>

      <input type="password" placeholder="Enter Password" name="psw" required><br>

      <input type="password" placeholder="Repeat Password" name="pswrepeat" required><br>

      <p class="lesson2">
      <label><b>Birthdate</b></label><br>
      <input type="date" name="Bday" required><br>

      <br>

      <label><b>Gender</b></label>
          <select name="Gender">
            <option>Male</option>
            <option>Female</option>  
          </select><br><br>
      </p>

      <div class="clearfix">
        <button type="buttons2"  class="cancelbutton2"><a href ="homefornonregister.php">Cancel</a></button>
        <button type="submit2" class="signupbutton2" name="submit">Enroll</button>
      </div>

      <div class="wrong">

      </div>

    </div>
  	</form>
	</div>
	</div>

	<div class="darkbluepadding4">

	</div>

	<p class="ourmission">
	Our mission is to provide a free, <br>
	education to anyone,anywhere.<br><br>

	ELearning Academy is a 502(c)(4)non-profit company.<br>

	</p>

	

	<div class="adminbutton1">
	<a class="adminbutton" href="#popup2">ADMIN</a>
	</div>

	<div id="popup2" class="overlay2">
	<div class="popup2">


	<?php
	   
	//define(DOC_ROOT,dirname(_FILE_)); //properly get DB_conncetion.php
	

	if (isset($username,$password)) {
		$username=$_POST['username'];//set username
	    $userpassword=$_POST['psw'];//set password
	    $msg='';
		ob_start();
		include(DOC_ROOT.'/DB_connection.php');//initiate mysql connection
		$myusername=stripcslashes($username);
		$mypassword=stripcslashes($password);
		$myusername=mysqli_real_escape_string($dbC,$myusername);
		$mypassword=mysqli_real_escape_string($dbc,$mypassword);
		$sql="SELECT * FROM admin WHERE username='$myuseradmin' and psw=admin('$mypassword')";
		$result=mysqli_query($dbC,$sql);// row is counting table row
		$count=mysqli_num_rows($result);
		 //if result matched the username and password,table row must be 1 row
		if ($count==1) {
			//register username and password and redirect to file"admin.php" 
			session_register("admin");
			session_register("password");
			$_SESSION['name']=$myusername;
			header("location:admin.php");
	}
	
		 else{
		 	$msg="wrong Username or Password.Please retry";
		 	header("location:homefornonregister.php?msg=$msg");
		 }
		 ob_end_flush();

	}
		 

	?>

	<div class="welcome">
	<img src ="wwelcomebackadmin.png">
	</div>
	   
	<form action="" method="POST">

	<div id="whole">
	<div class="admincontainer">
	        <input type="text" placeholder="Username" name="username" class="textt" required>
	        <input type="password" placeholder="Enter Password" name="psw" class="passwords" required>
	        <button name="submit" class="submit3" >GO</button></a>
	</div>

	<div class="adminaccount">
	<p class="account3">Don't have an account? <a href="signin.php">Create</a>.</p>
	 </div>
	     
	<div class="admincontainer2" style="background-color:#f1f1f1">
	 <button type="button" class="cancelbutton3"><a href ="homefornonregister.php">Cancel</a></button>        
	 </div>
	      

	</div>
	</form>



	
	<a class="close2" href="#">&times;</a>
   	
	</div>
	</div>

	  <div class="Allrightserve">
	  		@ 2017 ELearning Academy    Terms of use Privacy
	  </div>

	  <div class="allabout">
	  		<b>About</b><br><br>
	  		News<br>
	  		Impact<br>
	  		Team<br>
	  		Careers<br>
	  		Internships<br>
	  </div>

	  <div class="allcontacts">
	  		<b>Contact</b><br><br>
	  		Help center<br>
	  		Support community<br>
	  		Share your story<br>

	  </div>

	  <div class="allsubjects">
	  		<b>Subjects</b><br><br>
	  		English<br>
	  		Math<br>
	  		Science<br>
	  </div>
</body>

</html>