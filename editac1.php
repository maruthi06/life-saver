<?php
include 'condb.php';
$password=$_POST['password'];
$mob=$_POST['mob'];

function test($data){
	$data=trim($data);
	$data=stripslashes($data);
	$data=htmlspecialchars($data);
	return $data;
}


$sql="select mob from sign_up where password='$password' and mob='$mob'";
$res=$con->query($sql);


while ( $row = mysqli_fetch_row ( $res ) ) {
                echo "<tr>\n";
                for($i = 0; $i < mysqli_num_fields ( $res); $i ++) {
				if($row[$i]==$mob){
                                 include 'go1.php';
                      }
                  else{
                         echo "error";
                       }           
	         }
}

?>