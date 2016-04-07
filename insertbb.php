<?php
include 'condb.php';
$name=$_POST['name'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$city=test($_POST['cities']);
$address=$_POST['address'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];

function test($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

$dne1=preg_match('/^[0-9]{10}$/',$mob);
$dne2=preg_match('/^[a-zA-Z ]*$/',$name);

if($password==$confirm){
if ($dne1 && $dne2) 
{
	$sql="INSERT INTO sign_up(name,mob,email,cities,address,password,confirm) 
	        VALUES('$name','$mob', '$email', '$city' ,'$address','$password', '$confirm')";
if ($con->query($sql)) 
{
       
	if(mysqli_affected_rows($con)>0){
            include('captcha1.php');
		   
		   }
	else{
	 echo "not added";
	 echo mysqli_error($con);
 }
 
 }
  
}
else{
	echo "Enter valid details..";
}
}


else{
    
  echo "<script> 

	window.alert('Password and Confirm Password did not Match');

</script>";  
include 'signupbb.php';
}
?>


