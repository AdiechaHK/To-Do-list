<?php
include 'db1.php';
$email1 = $_POST["Email"];
$pass =md5( $_POST["password1"]);
$q = "select * from signup where email='" . $email1 . "' AND password='" . $pass . "'";
if(mysqli_num_rows(mysqli_query($conn,$q)))
{
 $data = mysqli_fetch_assoc(mysqli_query($conn,$q) );
 $_SESSION['user']=$email1;
 $_SESSION["uid"]= $data['id'];
 print_r($_SESSION["uid"]);
 echo "successfully login";
 $insert="INSERT INTO login (email,password) VALUES ('". $email1 . "' ,'" . $pass . "')";
 if ($query=mysqli_query($conn,$insert))
 { 
  $results = mysqli_query($conn, $query);
  echo 'Saved!';
  header("location:main.php");
  exit();
}
else
{
  echo "could not insert";
}
}
else
{
  echo "username password don't match";
}
?>
