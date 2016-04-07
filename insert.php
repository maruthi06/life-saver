<?php
include 'condb.php';
$name=$_POST['name'];
$mob=$_POST['mob'];
$email=$_POST['email'];
$city=test($_POST['cities']);
$gender=test($_POST['gender']);
$bg=test($_POST['bloodgroup']);
$age=$_POST['age'];
$weight=$_POST['weight'];
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


$sql1="select mob from sign_up";
$res=$con->query($sql1);
$sql2="select email from sign_up";
$res1=$con->query($sql2);

if($password==$confirm){
     
	         if ($dne1 && $dne2) 
     {
	   $sql="INSERT INTO sign_up(name,mob,email,cities,gender,bloodgroup,age,weight,password,confirm) 
	        VALUES('$name','$mob', '$email', '$city' ,'$gender' , '$bg','$age', '$weight','$password', '$confirm')";

           if ($con->query($sql)) 
           {
  
	            if(mysqli_affected_rows($con)>0){
                   include('captcha.php');
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
include 'signup.php';
}
?>


