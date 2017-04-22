<?php
	session_start();

?>

<!DOCTYPE html>
<html>

<link rel="stylesheet" type="text/css" href="loginpage.css">


<div class="body"></div>
		<div class="grad"></div>
		<div class="header">
			<div>Project<span>Evaluator</span></div>
		</div>
		<br>
	<div class="login">
	<form action="loginconfirmation.php" method="POST">
	
	<input type="text" placeholder="Enter Your Student ID" name="studentid">
	<input type="password" placeholder="Password" name="password">
	<div class = "button">
	<button type="submit"> submit </button>
	</div>
	<br></br>
	 <a href="register.php"> register here</a> 
	
	</div>
	</form>
<?php
	if (isset($_SESSION['userid'])) {
	echo $_session['userid'];
	} else 
	{	
	}
?>
</body>
</html>