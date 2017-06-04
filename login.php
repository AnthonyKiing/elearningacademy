

<html>
<head>
  <meta charset="utf-8">
  <link rel="stylesheet" type="text/css" href="stylepart3.css">
  <title></title>
</head>


<?php
session_start();
$_SESSION['message'] = '';

$mysqli = mysqli_connect('localhost', 'root','','newusers');

 if(isset($_POST['submit'])){
     $useremail = $_POST['email'];
     $password = $_POST['psw'];

     $sql = "SELECT * FROM users WHERE  email = '$useremail' AND psw = '$password'";
      
     $result = mysqli_query($mysqli,$sql);
     $row=mysqli_num_rows($result);
     if($row ==1){
          $_SESSION['email'] = $useremail;
          header("location: homeforstudents.php?id=".$useremail);
     }
     else{
      echo"Username or Password is Incorrect";
         $_SESSION['message'] = "Username or Password is Incorrect";
     }
 }
 
?>

<body>

<center>
  <div class="welcome">
    <img src ="wwelcomebackadmin.png">
  </div>
   
  <form action="" method="POST">

    <div id="whole">
      <div class="container">
        <input type="text" placeholder="Email" name="email" required>
        <input type="password" placeholder="Enter Password" name="psw" required>
        <button name="submit" class="submit" >GO</button></a>
      </div>

       <div class="account2">
        <p class="account">Don't have an account? <a href="signin.php">Create</a>.</p>
      </div>
     
      <div class="container" style="background-color:#f1f1f1">
        <button type="button" class="cancelbutton"><a href ="homefornonregister.php">Cancel</a></button>        
      </div>
      

    </div>
  </form>

</center>
</body>
</html>




