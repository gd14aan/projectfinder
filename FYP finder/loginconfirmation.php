<?php 
session_start();
require_once("newconnect.php");

// create connection 
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
$studentid = mysqli_real_escape_string($conn,$_POST['studentid']);
$password = mysqli_real_escape_string($conn,$_POST['password']);



$sql = "SELECT * FROM users WHERE studentid ='$studentid' ";
$result = mysqli_query($conn, $sql);
$row = mysqli_fetch_assoc($result); 
$hash_password = $row['password'];
$hash = password_verify($password, $hash_password);

if ($hash = 0 ) { 
 header("location:/loginpage.php?error=empty");
 exit();
 
} else {
 
 $sql = "SELECT * FROM users WHERE studentid='$studentid' AND password='$hash_password'";
 $result = mysqli_query($conn, $sql);
 if (!$row = mysqli_fetch_assoc($result))
  if (!empty($_POST)){
  extract($_POST);
  $_SESSION['error']=array();
  if(empty($studentid)  || empty($password))
  {
   $_SESSION['error'][] = "Please enter username or password";
   header("location:/loginpage.php");
  }
  
  
 }
 else
 {
  header("location:loginpage.php");
 }
 {
 
 if( ! empty($row)){
  $_SESSION['users']['studentid'] =$row['studentid'];
  $_SESSION['users']['userid'] =$row['userid'];
  $_SESSION['users']['status']= true;
  
  header("location:/home.php");
 }
 else
 {
  $_SESSION['error'][]="wrong username or password";
  header("location:/loginpage.php");
 }
 } 
echo "your username or password is incorrect!";
}
 $conn->close();

?>

