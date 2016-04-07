<html>
<style>
div {
    width: 320px;
    height: 370px;
    overflow: hidden;
    background: #1e1e1e;
    border-radius: 6px;
    margin: 150px 515px auto;
    box-shadow: 0px 0px 50px rgba(0,0,0,.8);
}

div .fg {
    width: 318px;
    height: 14px;
    padding-top: 13px;
    padding-bottom: 13px;
    font-size: 14px;
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
body{
	background-image:url('blood9.jpg');
-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 }

 input[type=submit] {
    
    background-color: #8B0000;
    color: white;
    padding: 6px 10px;
    margin: 0px 0px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

 input[type=submit]:hover {
    background-color: #FF00FF;
-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }

form{
	padding:0px 80px;
	font-size:20px;
	
}
section{
	margin-bottom:10px;
}

</style>
<body>

<title>Forgot Password</title> 
<div>
<section class="fg"><b><font size="5" style="color:#bfbfbf">Forgot Password</font></b></section>
<form action="code.php">
<font size="5" style="color:white">Mobile No:<br>
<input type="text" name="mbl">
<br><br>
Email-id:<br>
<input type="text" name="email">
<br><br></font>
<input type="submit" value="Send Code">
<br><br>
</i>
</form>
<form action="login.php">
<input type="submit" value="Back" align="left">
</form>
</div>
</body>
</html>

