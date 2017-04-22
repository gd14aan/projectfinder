<?php session_start();
if (! isset($_SESSION['users'] ['status']))
{
	header ("location:/loginpage.php");
	exit;
}
?>

<!DOCTYPE html>
<html>
<?php require_once $_SERVER["DOCUMENT_ROOT"] . '/header.php';?>
<link rel="stylesheet" type="text/css" href="home.css">


<div align="center">
		
		 
		
		
		<div class='wrap'> 
		<div>Project<span>Evaluator</span> </div> 
		<div> "Click" Below To Begin </div> <div> <a href="stage1_view.php" class="button">Begin </a> </div>
		
		
		
		</div>
</div>
		
		
		
<style>	


.wrap {
	
	top :30% ;
	left:35%;
	text-align: center;
	font-size: 40px;
	font-family: 'Exo', sans-serif;
	button-align: center
	color: white;
	height: 30px;
}

a {
	-webkit-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
	-moz-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
	-ms-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
	-o-transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
	transition: all 200ms cubic-bezier(0.390, 0.500, 0.150, 1.360);
	display: block;
	margin:  auto;
	max-width: 180px;
	text-decoration: none;
	border-radius: 4px;
	padding: 20px 30px;
}

a.button {
	color: rgba(0, 0, 0, 0);
	box-shadow: rgba(, 22, 54, 0.4) 0 0px 0px 2px inset;
	width: 300px;
	height: 25px;
	
	
	background: #fff;
	border: 1px solid #fff;
	cursor: pointer;
	border-radius: 2px;
	color: #a18d6c;
	font-family: 'Exo', sans-serif;
	font-size: 16px;
	font-weight: 400;
	padding: 6px;
	
}

a.button:hover {
	color: rgba(255, 255, 255, 0.85);
	box-shadow: rgba(30, 22, 54, 0.7) 0 0px 0px 40px inset;
}




</style>	

</html>