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
}  h1{
      margin-bottom:-70px;
      margin-top:50px;
  }

</style>
<h1 align="center"><font color="red">ADD OR SEARCH FOR BLOOD</font></h1>
<a href="log_out.php"><font color="white" size="5">Log out</a></font>
<body>

<form align="right" action="info.php">
<input type="submit" value="Information">
</form>
<form align="right" action="editacc1.php">
<input type="submit" value="Edit your Account">
</form>
<section class="login1" id="left">
<form action="add.php" method="post">
 <font size="6" color="white">Enter email:</font><br>
  <font color="white"><input type="email" name="email" placeholder="Enter email"><br>
  <input type="checkbox" name="available[]" value="A+">A+
  <input type="checkbox" name="available[]" value="A-">A-<br>
  <input type="checkbox" name="available[]" value="B+">B+
  <input type="checkbox" name="available[]" value="B-">B-<br>
  <input type="checkbox" name="available[]" value="O+">O+
  <input type="checkbox" name="available[]" value="AB+">AB+<br>
  <input type="checkbox" name="available[]" value="O-">O-
  <input type="checkbox" name="available[]" value="AB-">AB-<br></font>
  <input type="submit" value="Add">
</form>
</section>
<section class="login" id="right">
<div class="d1"><b>Search Blood<b></div>
<div class="search">
<form action="searchbbbg.php">
<input type="submit" value="Search by Blood Group">
</form>
<form action="searchbbc.php">
<input type="submit" value="Search by City">
</form>
</div>
</section>
</body>
</html>