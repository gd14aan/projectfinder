<!-- head and information of website -->




<!-- footer of the page --> 


<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/header.php';?>
<link rel="stylesheet" type="text/css" href="form.css">
<html>
<body>
<div align = "center" class = "result"> 
<div class = "resultshead"><h2> Results</h2></div>
<div class = "resultbody"> 



<?php 

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "project";

// Create connection
$conn = mysqli_connect($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT users_userid, Question1, Question2, Question3, Question4, Question5 FROM question";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	// output data of each row
	while($row = $result->fetch_assoc()) {
		echo "Results:".$row["users_userid"]. " " . $row["Question1"]. " " .
	$row["Question2"]. " ". $row["Question3"]." ". $row["Question4"]." ". $row["Question5"];
	}
} else {
	echo "0 results";
}
mysqli_close($conn);
?>







</body>
</div>	
</html>
	



