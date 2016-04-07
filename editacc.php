<html>
<style>
form {
	border-bottom-right-radius: 6px;
    border-bottom-left-radius: 6px;
	border-top-right-radius: 6px;
    border-top-left-radius: 6px;
    width: 400px;
	padding-top:20px;
    height:200px;
    overflow: hidden;
    background: #1e1e1e;
    margin:  250px 470px 20px 470px;
    box-shadow: 0px 0px 50px rgba(0,0,0,.8);
}
body{
	background-image:url("blood9.jpg");
    -webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
}
</style>
<body>
<form action="editac.php" method="post">
    <font size="5" color="white">  Password: <br> 
		<input type="password" name="password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" 
		title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"><br><br>
        Old Mobile No:<br></font>
<input type="number" name="mob" placeholder="Enter your mobile no"><br><br>
<input type="submit" value="Submit">
<form>
</body>
</html>