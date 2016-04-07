<?php
include 'condb.php';

$email=$_POST['email'];
$password=$_POST['password'];


if ($email && $password) 
{
$email= stripslashes($email);
$password = stripslashes($password);
$email = mysqli_real_escape_string($con,$email);
$password = mysqli_real_escape_string($con,$password);

$sql="SELECT * FROM sign_up WHERE email='$email' and password='$password'";
$result=$con->query($sql);
$row = $result->fetch_assoc();
if($row["email"]==$email && $row["password"]==$password){
      include ('searchbb.php');
}
else {
    include('invalid.php');
	include('loginbb.php');
   }
}
else{
	echo "<font size='4'>Enter Valid Details...</font>";
	include('loginbb.php');
	echo "<font size='6'>If dont have an account go to <a href='signupbb.php'>Sign Up</a></font>";
}
?>
