
<?php require_once('DB_connection.php');
?>

<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="stylepart2.css">
  <title></title>
</head>

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
$_SESSION['message'] = "you are now registered!";
}
}
else
{
  echo"invalid password"; 
  $_SESSION['message'] = "Username or Password is Incorrect";
}

}

  ?>


<body>

<center>
  <div class="bepart">
    <img src="bepart.png">
  </div>

  <form method ="POST" action="">
    <div class="containers">      
      <input type = "text" placeholder= "First Name" name ="Nme" required><br>

      <input type = "text" placeholder= "Surname" name ="Srnme" required><br>

      <input type="text" placeholder="Enter Email" name="email" required><br>

      <input type="text" placeholder="Username" name="usrnme" required><br>

      <input type="password" placeholder="Enter Password" name="psw" required><br>

      <input type="password" placeholder="Repeat Password" name="pswrepeat" required><br>

      <p class="lesson">
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
        <button type="buttons"  class="cancelbutton"><a href ="homefornonregister.php">Cancel</a></button>
        <button type="submit" class="signupbutton" name="submit">Enroll</button>
      </div>

      <div class="wrong">

      </div>

    </div>
  </form>
</center>



<?php

      if ($_SERVER["REQUEST_METHOD"]=="GET") {
        if (isset($_GET['signin'])&& $_GET['signin']>0) {
          $sql='SELECT * FROM  user WHERE email ='.$_GET['sigin'];
          if ($result = mysqli_query($connection,$sql)) {
          while($row=mysqli_fetch_assoc($reuslt)){

          ?>

          <?php




          }
          mysqli_free_result($result);
          }
        }
      }mysqli_close($connection);



   ?>






</body>
</html>


