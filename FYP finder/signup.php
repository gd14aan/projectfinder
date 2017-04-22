<?php 

session_start();


require_once("newconnect.php");


$studentid = $_POST['studentid'];
$password = $_POST['password'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];


// create connection 
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);



$encrypted_password = password_hash($password, PASSWORD_DEFAULT);
$sql = "INSERT INTO users (studentid, password, firstname, lastname) 
VALUES ('$studentid','$encrypted_password', '$firstname', '$lastname')";
$result = mysqli_query($conn, $sql);
header("location: loginpage.php");
 

$conn->close();

?>



<!DOCTYPE html> 
<html>
<header>
</header>
<body>
</body>
<footer>
<a href="loginpage.php">Click Here To Go Back to Login Page</a>
</footer>
</html>



 











