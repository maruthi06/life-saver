<html>
<style>
.login {
    width: 330px;
    height: 270px;
    overflow: hidden;
    background: #1e1e1e;
    border-radius: 6px;
    margin: 120px 515px auto;
    box-shadow: 0px 0px 50px rgba(0,0,0,.8);
}

input[type=submit]{
	padding:5px;
	font-size:20;
	margin:20px 0px 0px 50px;
	border-radius: 20px;
}
input[type=text],select{
	font-size:20;
	margin:10px 0px 0px 0px;
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


</style>
<a href="log_out.php">Log out</a>

<body>

<form align="right" action="info.php">
<input type="submit" value="Information">
</form>
<form align="right" action="editacc.php">
<input type="submit" value="Edit your Account">
</form>
<section class="login">
<div class="d1"><b>Search Blood<b></div>
<div class="search">
<form action="searchbg.php">
<input type="submit" value="Search by Blood Group">
</form>
<form action="searchc.php">
<input type="submit" value="Search by City">
</form>
</div>
</section>
</body>
</html>