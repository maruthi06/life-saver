<?php
include "condb.php";
$email=$_POST['email'];
$sql="DELETE from sign_up WHERE email='$email'";
$res=mysqli_query($con,$sql);
if($email){
	echo "<script> 

	window.alert('Deleted Successfully');

</script>";
echo "<form  align='right' action='editadmin.php'>
<input type='submit' value='Back'>
</form>";
}
else{
	echo "not valid";
echo "<form  align='right' action='editadmin.php'>
<input type='submit' value='Back'>
</form>";
	}
?>