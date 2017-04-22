<?php
	session_start();

?>

<!DOCTYPE html>
<html>
<link rel="stylesheet" type="text/css" href="loginpage2.css">
<div class="login">
	<h1>Login</h1>
    <form method="post">
    	<input type="text" name="u" placeholder="Username" required="required" />
        <input type="password" name="p" placeholder="Password" required="required" />
        <button type="submit" class="btn btn-primary btn-block btn-large">Let me in.</button>
		<a href="register.php">register here</a>
    </form>
</div>
</html>

<?php
	if (isset($_SESSION['id'])) {
	echo $_session['id'];
	} else {
		echo "You are not logged in!";
	}
?>