<html>
<style>
.login {
    width: 330px;
    height: 270px;
    background: #1e1e1e;
    border-radius: 6px;
    margin-left:850px;
    margin-top:-285px;
    box-shadow: 0px 0px 50px rgba(0,0,0,.8);
}

.login1 {
    width: 330px;
    height: 290px;
    background: #1e1e1e;
    border-radius: 6px;
    margin-top:150px;
    margin-left:250px;
    box-shadow: 0px 0px 50px rgba(0,0,0,.8);
}

input[type=submit]{
	padding:5px;
	font-size:20;
	margin:20px 0px 0px 50px;
	border-radius: 20px;
}
input[type=email],select{
	font-size:20;
	margin:10px 0px 0px 30px;
}
input[type=submit]:hover {
    background-color:#C0C0C0;
}
body{
	background-image:url("blood4.png");
-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
	}

.d1{
    width: 328px;
    height: 14px;
    padding-top: 13px;
    padding-bottom: 13px;
    font-size: 26px;
    text-align: center;
    color: #bfbfbf;
    font-weight: bold;
    background: #121212;
    border: #2d2d2d solid 1px;
    margin-bottom: 30px;
    border-top-right-radius: 6px;
    border-top-left-radius: 6px;
    font-family: Arial;
}
input[type=checkbox]{
    margin:20px;
    margin-bottom:0px;
}



</style>
</body>
</html>


<?php
include 'condb.php'; //include your db config file
//$available= $_POST['available[]'] . "," . $_POST['available[]'] . "," . $_POST['available[]'] 
//. "," . $_POST['available[]'] . "," . $_POST['available[]'] . "," . $_POST['available[]'] . "," . $_POST['available[]'] . "," . $_POST['available[]'];

$available = $_POST['available'];
$final = "";
foreach ($available as $key => $value) {
    $final  = $final . $value . " ";
}


$email=$_POST['email'];


if($final && $email){
$sql="update sign_up set available='$final' where email='$email'";
$result=$con->query($sql);
if($result){
	echo "done\n";
    echo "<html>
<body>

<h1>Thank you </h1>
<p>Blood groups are added</p>

 <form align='left' action='searchbb.php'>
<input type='submit' value='Back'></form>
</body>
</html>";
	}
}
else if(!$email || !$final){
echo "<html>
<body>
<h1>Enter email or Blood Groups are not selected </h1>
<p>Blood groups are not-added</p>
 <form align='left' action='searchbb.php'>
<input type='submit' value='Back'></form>
</body>
</html>";    
}
?>

