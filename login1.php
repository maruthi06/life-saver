<?php
include 'condb.php';

$email1=$_POST['email'];
$password1=$_POST['password'];


if ($email1 && $password1) 
{
$email1= stripslashes($email1);
$password1 = stripslashes($password1);
$email1 = mysqli_real_escape_string($con,$email1);
$password1 = mysqli_real_escape_string($con,$password1);

$sql="SELECT * FROM sign_up WHERE email='$email1' and password='$password1'";
$result=$con->query($sql);
$row = $result->fetch_assoc();
if($row["email"]==$email1 && $row["password"]==$password1){
   include ('search1.php');
}
else {
    include('invalid.php');
	include('login.php');
   }
}
else{
	echo "<font size='4'>Enter Valid Details...</font>";
	include('login.php');
	echo "<font size='6'>If dont have an account go to <a href='signup.php'>Register</a></font>";
}
?>
