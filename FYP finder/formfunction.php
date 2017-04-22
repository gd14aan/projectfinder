<?php
$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";


$q1 = $_POST['q1'];
$q2 = $_POST['q2'];
$q3 = $_POST['q3'];
$q4 = $_POST['q4'];
$q5 = $_POST['q5'];



// create connection 
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);

// check connection
if ($conn->connect_error) {
	die("connection failed: " .$conn->connect_error);
	
	
}





$sql = "INSERT INTO question (Question1, Question2, Question3, Question4, Question5)
VALUES ('$q1', '$q2', '$q3', '$q4', '$q5')";

if ($conn->query($sql) == TRUE) {
	echo "THANK YOU! Your info has been entered into the database, you may close this window!";
} else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}
header ("location:/grabresults.php");
$conn->close();

?>