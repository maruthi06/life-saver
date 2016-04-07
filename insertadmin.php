<?php
include 'condb.php';

$email=$_POST['email'];
$password=$_POST['password'];
$confirm=$_POST['confirm'];


if($password==$confirm)
   {
	   $sql="INSERT INTO admin(email,password,confirm) 
	        VALUES('$email','$password', '$confirm')";

           if ($con->query($sql)) 
           {
  
	            if(mysqli_affected_rows($con)>0){
                   include('editadmin.php');
		   }
	else{
	 echo "not added";
	 echo mysqli_error($con);
 }
 
 }
	

}



else{
    
  echo "<script> 

	window.alert('Password and Confirm Password did not Match');

</script>";  
include 'signup.php';
}
?>


