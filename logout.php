 <?php 
 
 if(isset($_GET['logout']))
{
	session_destroy();
	header('location:index.html?logout=true');
	mysqli_close($conn); // Closing Connection with Server
	exit;
}
	?>