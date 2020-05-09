<?php
$servername = "localhost";
$username = "root";
$password = "";
$conn = new mysqli($servername, $username, $password); // Create connection of database.
if ($conn->connect_error) // Check connection
{
	die("Connection failed: " . $conn->connect_error); // echo "Connected successfully";
}
$db = mysqli_select_db( $conn,"clockifydb"); // Selecting Database from Server
session_start();

?>