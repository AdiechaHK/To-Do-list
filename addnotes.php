<?php // Selecting Database from Server
include 'db1.php';
if(isset($_POST['submit']))  
{ 
	$notes =$_POST['notes'];
  $userid=$_POST['userid'];
  $date = date('Y-m-d H:i:s');
  $data="INSERT INTO addwishlist (userid, task) 
  VALUES ('" . $_POST['userid'] . " ', '" . $notes . "')"; 
  $results = mysqli_query($conn, $data);
  header("location:maincontentdisplay.php");
  exit;
}


?>