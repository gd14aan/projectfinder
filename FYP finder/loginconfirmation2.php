<?php 
session_start();
require_once("newconnect.php");






// create connection 
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);


$studentid = $_POST['studentid'];
$password = $_POST['password'];



$sql = "SELECT * FROM users WHERE studentid ='$studentid' AND password='$password'";
$result = $conn->query($sql);

if (!$row = $result->fetch_assoc()){
	echo "your username or password is incorrect!";
} else {
	$_SESSION['studentid'] ='';
	header('location:/home.php');
	}
 
	

	

 

$conn->close();

?>

