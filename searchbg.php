<html>
<style>

div {
	position:absolute;
    top: 50%;
    left: 50%;
    width:30em;
    height:20em;
    margin-top: -9em; /*set to a negative number 1/2 of your height*/
    margin-left: -15em; /*set to a negative number 1/2 of your width*/
    overflow: hidden;
    background: #1e1e1e;
    border-radius: 6px;
    box-shadow: 0px 0px 50px rgba(0,0,0,.8);
    }
	
div .sb {
    width: 34.28em;
    height: 14px;
    padding-top: 13px;
    padding-bottom: 13px;
    font-size: 14px;
    text-align: center;
    color: #bfbfbf;
    font-weight: bold;
    background: #121212;
    border: #2d2d2d solid 1px;
    margin-top:0px;
	margin-bottom: 20px;
    border-top-right-radius: 6px;
    border-top-left-radius: 6px;
    font-family: Arial;
}

input[type=submit] {
    font-size:20px;
    background-color: #8B0000;
    color: white;
    padding: 8px 10px;
    margin: 6px 60px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

select{
	font-size:20;
	margin:20px 0px 0px 150px;
	padding-left:20px;
}

input[type=submit]:hover {
    background-color: #FF00FF;
-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
  }

body{
	background-image:url("blood7.jpg");
-webkit-background-size: cover;
  -moz-background-size: cover;
  -o-background-size: cover;
  background-size: cover;
 }
 section{
	 font-size:30px;
	 margin-left:20px;
 } h1{
      margin-bottom:-70px;
      margin-top:50px;
  }

</style>
<h1 align="center"><font color="red">SEARCH BY BLOOD GROUP</font></h1>
<a href="log_out.php"><font size="5">Log out</a></font>
<body>
<form align="right" action="info.php">
<input type="submit" value="Information">
</form>
<div>
<h1 class="sb" align="center">Search Blood</h1>

<form action="resbg.php" method="post">
<section><font color="white">Blood Group:</section></font><br>
<select name="bloodgroup">
 <font size="5"> <option value="A+">A<sup>+</sup></option>
  <option value="A-">A<sup>-</sup></option>
  <option value="B+">B<sup>+</sup></option>
  <option value="B-">B<sup>-</sup></option>
  <option value="O+">O<sup>+</sup></option>
  <option value="O-">O<sup>-</sup></option>
  <option value="AB+">AB<sup>+</sup></option>
  <option value="AB-">AB<sup>-</sup></option></font>
</select>
<br><br><br>
<input type="submit" value="Search"></form>
<form action="search1.php"><input type="submit" value="Back">
</form>
</body>
</html>