<html>
<style>
table a:active,
table a:hover {
	color: #bd5a35;
	text-decoration:underline;
}
table {
	font-family:Arial, Helvetica, sans-serif;
	color:#666;
	font-size:12px;
	text-shadow: 1px 1px 0px #fff;
	background:#eaebec;
	margin:20px 400px 20px 350px;
	border:#ccc 1px solid;

	-moz-border-radius:3px;
	-webkit-border-radius:3px;
	border-radius:3px;

	-moz-box-shadow: 0 1px 2px #d1d1d1;
	-webkit-box-shadow: 0 1px 2px #d1d1d1;
	box-shadow: 0 1px 2px #d1d1d1;
}
table th {
	padding:21px 25px 22px 25px;
	border-top:1px solid #fafafa;
	border-bottom:1px solid #e0e0e0;
	background: #ededed;
	background: -webkit-gradient(linear, left top, left bottom, from(#ededed), to(#ebebeb));
	background: -moz-linear-gradient(top,  #ededed,  #ebebeb);
}
table th:first-child {
	text-align: left;
	padding-left:20px;
}
table tr:first-child th:first-child {
	-moz-border-radius-topleft:3px;
	-webkit-border-top-left-radius:3px;
	border-top-left-radius:3px;
}
table tr:first-child th:last-child {
	-moz-border-radius-topright:3px;
	-webkit-border-top-right-radius:3px;
	border-top-right-radius:3px;
}
table tr {
	text-align: center;
	padding-left:20px;
}
table td:first-child {
	text-align: left;
	padding-left:20px;
	border-left: 0;
}
table td {
	padding:18px;
	border-top: 1px solid #ffffff;
	border-bottom:1px solid #e0e0e0;
	border-left: 1px solid #e0e0e0;
    font-size:20px;
	background: #fafafa;
	background: -webkit-gradient(linear, left top, left bottom, from(#fbfbfb), to(#fafafa));
	background: -moz-linear-gradient(top,  #fbfbfb,  #fafafa);
}
table tr.even td {
	background: #f6f6f6;
	background: -webkit-gradient(linear, left top, left bottom, from(#f8f8f8), to(#f6f6f6));
	background: -moz-linear-gradient(top,  #f8f8f8,  #f6f6f6);
}
table tr:last-child td {
	border-bottom:0;
}
table tr:last-child td:first-child {
	-moz-border-radius-bottomleft:3px;
	-webkit-border-bottom-left-radius:3px;
	border-bottom-left-radius:3px;
}
table tr:last-child td:last-child {
	-moz-border-radius-bottomright:3px;
	-webkit-border-bottom-right-radius:3px;
	border-bottom-right-radius:3px;
}
table tr:hover td {
	background: #f2f2f2;
	background: -webkit-gradient(linear, left top, left bottom, from(#f2f2f2), to(#f0f0f0));
	background: -moz-linear-gradient(top,  #f2f2f2,  #f0f0f0);	
}

body{
	background-image:url("blood2.jpg");
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}

h1{
    margin-bottom:-20px;
}
h2{
    margin-top:20px;
}

</style>
<body>

<?php 
include 'condb.php';
$bg=$_POST['bloodgroup'];
//$available=$_POST['available'];
//$city=$_POST['city'];
$sql = "SELECT name,bloodgroup,mob,cities FROM sign_up where bloodgroup='$bg'";
$result = $con->query($sql);

$count=0;

if ($result->num_rows > 0) {
echo "<h1 align='center'><font color='red'>Donars List</h1></font>";
echo "<table border='1' align='center' style='border-collapse:collapse;border:'red';>
  <tr>
    <td style='color:brown' align='center'><i>Id</td>  
    <td style='color:brown' align='center'><i>Name</td>
    <td style='color:brown'><i>Blood Group</td>
	<td style='color:brown'><i>City</td>
	<td style='color:brown'><i>Mobile</td>

    </tr>";
     while($row = $result->fetch_assoc()) {
        echo "<tr>";
  echo "<td align='center'>".++$count."</td>";
  echo "<td align='center'>".$row['name']."</td>";
  echo "<td align='center'>".$row['bloodgroup']."</td>";
  echo "<td align='center'>".$row['cities']."</td>";
  echo "<td align='center'>".$row['mob']."</td>"."<br>";
  echo "</tr>"; 
     }
	 $sql="SELECT name,bloodgroup,mob,cities FROM sign_up where bloodgroup='O+'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
        echo "<tr>";
  echo "<td align='center'>".++$count."</td>";
  echo "<td align='center'>".$row['name']."</td>";
  echo "<td align='center'>".$row['bloodgroup']."</td>";
  echo "<td align='center'>".$row['cities']."</td>";
  echo "<td align='center'>".$row['mob']."</td>"."<br>";
  echo "</tr>"; 
     }
	
	 }
$sql="SELECT name,bloodgroup,mob,cities FROM sign_up where bloodgroup='O-'";
$result = $con->query($sql);
if ($result->num_rows > 0) {
	while($row = $result->fetch_assoc()) {
        echo "<tr>";
  echo "<td align='center'>".++$count."</td>";
  echo "<td align='center'>".$row['name']."</td>";
  echo "<td align='center'>".$row['bloodgroup']."</td>";
  echo "<td align='center'>".$row['cities']."</td>";
  echo "<td align='center'>".$row['mob']."</td>"."<br>";
  echo "</tr>"; 
     }
	
}
} 
else{
	echo "<h1 font size='20px' style='color:red' align='center'>No Donar found for Blood Group:<font color='blue'>$bg</h1><font>";
}

$sql1 = "SELECT name,cities,mob,available FROM `sign_up` WHERE available IS NOT NULL";
$result1 = $con->query($sql1);

$count1=0;

if ($result1->num_rows > 0) {
echo "<table border='1' align='center' style='border-collapse:collapse;border:'red';>
  <tr>
    <td style='color:brown' align='center'><i>Id</td>  
    <td style='color:brown' align='center'><i>Name</td>
    <td style='color:brown'><i>City</td>
	<td style='color:brown'><i>Mobile</td>
	<td style='color:brown'><i>Blood Groups Available In Blood Bank</td>
    </tr>";
    
echo "<h1 align='center'><font color='red'><style='margin-bottom:40px'>Blood Bank List</h1></font></style>";
     while($row = $result1->fetch_assoc()) {
        echo "<tr>";
  echo "<td align='center'>".++$count1."</td>";
  echo "<td align='center'>".$row['name']."</td>";
  echo "<td align='center'>".$row['cities']."</td>";
  echo "<td align='center'>".$row['mob']."</td>";
  echo "<td align='center'>".$row['available']."</td>"."<br>";
  echo "</tr>"; 
     }
} 
else{
	echo "<h2 font size='20px' style='color:red' align='center'>No Blood Bank found</h2>";
}



?>

<form action="search1.php">
<input type="submit" value="Back">
</form>
<br><br>
<a href="log_out.php"><font size="5">Log out</a></font>
</body>
</html>