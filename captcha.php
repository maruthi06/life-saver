<html>
<style>
input[type=text]{
	margin: 0px 00px 20px 550px;
	font-size:20px;
    text-align:center;    
	}
	.op{
		margin: 0px 00px 20px 550px;
	font-size:20px;
    text-align:center;
	}
	.op1{
		margin:0px 10px ;
	font-size:20px;
    text-align:center;
	}
	body{
		background: #1e1e1e;
	}
	input[type=text]{
    width: 200px;
    font-size: 30px;
	text-align:center;
    padding-top: 10px;
    padding-bottom: 20px;
    padding-left: 0px;
    border: none;
    color: #bfbfbf;
    background: #141414;
    outline: none;
    margin: 0px 0px 20px 550px;
}
</style>
<head>
<script type="text/javascript">
function Captcha(){
    var alpha =new Array('A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z',
                    'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
    var i;
	for(i=0;i<6;i++){
	var a = alpha[Math.floor(Math.random()* alpha.length)];
	var b = alpha[Math.floor(Math.random()* alpha.length)];
	var c = alpha[Math.floor(Math.random()* alpha.length)];
	var d = alpha[Math.floor(Math.random()* alpha.length)];
	var e = alpha[Math.floor(Math.random()* alpha.length)];
	var f = alpha[Math.floor(Math.random()* alpha.length)];
	var g = alpha[Math.floor(Math.random()* alpha.length)];
	}
	var code = a+b+c+d+e+f+g;
    document.getElementById("mainCaptcha").value = code;
 }
				  
  function ValidCaptcha(){
	var string1 = removeSpaces(document.getElementById('mainCaptcha').value);
	var string2 = removeSpaces(document.getElementById('txtInput').value);
	if(string1 == string2){
	return true;
	}
	else{
	return false;
	}
	}
  function removeSpaces(string){
  return string.split(' ').join('');
  }
  function movenxt(){
	  if(ValidCaptcha()==true){
		  window.location.href="suc.php";
		  window.location.href="search1.php";
	  }
  }
  </script>
  </head> 
<body onload="Captcha();">
  <table>
    <h1 style="color:white;font-size:50px;" align="center">Text Captcha</h1>
	<tr><td><input type="text" id="mainCaptcha"/>
	<input class="op1" type="button" id="refresh" value="Refresh" onclick="Captcha();"/></td></tr>
	<tr><td><input type="text" id="txtInput"/></td></tr>
	<tr><td><input class="op" id="Button1" type="button" value="Check" onclick="alert(ValidCaptcha());movenxt();"/></td></tr>
   </table>
</body>
</html>
