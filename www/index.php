<?php 
	require_once('../phps/mysql_connect.php');
 ?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css.css">
	<title>Log in to JaokPillows.com</title>
</head>
<body>
<div id="left">
<img src="jaoks.png" id="img"><img src="jaok.png" id="img"><img src="jaoks.png" id="img"><img src="jaok.png" id="img">
<img src="jaok.png" id="img"><img src="jaoks.png" id="img"><img src="jaok.png" id="img"><img src="jaoks.png" id="img">
<img src="jaoks.png" id="img"><img src="jaok.png" id="img"><img src="jaoks.png" id="img"><img src="jaok.png" id="img">
<img src="jaok.png" id="img"><img src="jaoks.png" id="img"><img src="jaok.png" id="img"><img src="jaoks.png" id="img">
<img src="jaoks.png" id="img"><img src="jaok.png" id="img"><img src="jaoks.png" id="img"><img src="jaok.png" id="img">
<img src="jaok.png" id="img"><img src="jaoks.png" id="img"><img src="jaok.png" id="img"><img src="jaoks.png" id="img">
<img src="jaoks.png" id="img"><img src="jaok.png" id="img"><img src="jaoks.png" id="img"><img src="jaok.png" id="img">
<img src="jaok.png" id="img"><img src="jaoks.png" id="img"><img src="jaok.png" id="img"><img src="jaoks.png" id="img">
</div>	
<div id="right">
<img src="jaoka.png" id="img"><img src="jaoksa.png" id="img"><img src="jaoka.png" id="img"><img src="jaoksa.png" id="img">
<img src="jaoksa.png" id="img"><img src="jaoka.png" id="img"><img src="jaoksa.png" id="img"><img src="jaoka.png" id="img">
<img src="jaoka.png" id="img"><img src="jaoksa.png" id="img"><img src="jaoka.png" id="img"><img src="jaoksa.png" id="img">
<img src="jaoksa.png" id="img"><img src="jaoka.png" id="img"><img src="jaoksa.png" id="img"><img src="jaoka.png" id="img">
<img src="jaoka.png" id="img"><img src="jaoksa.png" id="img"><img src="jaoka.png" id="img"><img src="jaoksa.png" id="img">
<img src="jaoksa.png" id="img"><img src="jaoka.png" id="img"><img src="jaoksa.png" id="img"><img src="jaoka.png" id="img">
<img src="jaoka.png" id="img"><img src="jaoksa.png" id="img"><img src="jaoka.png" id="img"><img src="jaoksa.png" id="img">
<img src="jaoksa.png" id="img"><img src="jaoka.png" id="img"><img src="jaoksa.png" id="img"><img src="jaoka.png" id="img">
</div>


<div id="loginbox">
	<form method="post" action="verification.php">
		<p>Email: </p><input type="Text" name="mail" required> <br />
		<p>Password: </p><input type="Password" name="Password" required> <br />
		<input type="submit" name="submit" value="Login" id="bot">
	</form>
	<a href="reg.php"><button>Register new account</button></a>
</div>
</body>
</html>