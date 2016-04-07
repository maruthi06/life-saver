<?php
include 'condb.php';
$email=$_POST['email'];
$mob=$_POST['mob'];
$city=test($_POST['cities']);

function test($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}

$sql="update sign_up set mob='$mob',cities='$city' where email='$email'";
$result=$con->query($sql);
if($result){
	echo "done\n";
	echo "<br>";
	echo "<a href='searchbb.php'><font size='5'>Back</a></font>";
}
else{
	echo "undone";
	echo "<br>";
	echo "<a href='searchbb.php'><font size='5'>Back</a></font>";
}
?>