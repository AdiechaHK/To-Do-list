<?php
 // Selecting Database from Server
include 'db1.php';
if(isset($_POST['submit']))  
{ 
	$email = $_POST['email'];
  $password = md5($_POST['Password']);
  $repassword = md5(($_POST['RetypePassword']));
  $sql_e = "SELECT * FROM signup WHERE email='$email'AND password='$password'";
  $res_e = mysqli_query($conn, $sql_e);
  if(mysqli_num_rows($res_e) > 0)
  {
   $email_error = "Sorry... USERNAME already taken"; 	
   echo "$email_error";
  }
 else
 {
  $_SESSION["user"]=$email;  
  $query = "INSERT INTO signup (email, password,retypepassword) 
      	   VALUES ('$email', '$password','$repassword')"; //insert data into a signup table.
           $results = mysqli_query($conn, $query);
           header("location:main.php");
           exit();
  }
         if($_POST['Password']!=$_POST['RetypePassword'])
        {
          //$_SESSION["error"]="Error";
          header("location:signup.html");
          exit;
        }
  }
?>
