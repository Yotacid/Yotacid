<?php 
	require_once('../phps/mysql_connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="css.css">
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
	<form method="post" action="regsend.php">
		<div style="position:relative; left:0px; width:49.5%;">
		<p>First name: </p><input type="text" name="Name" required> <br />
		<p>surname: </p><input type="text" name="Surname" required> <br />
		<p>Email: </p><input type="text" name="Mail" required> <br />
		<p>Password: </p><input type="Password" name="Password" required> <br />
		</div>
		<div style="right:0px; width:49.5%;">
		<p>Personal number</p><input type="text" name="Personal" required><br />
		<p>Postal Addres: </p><input type="text" name="Postal" required> <br />
		<p>Phone: </p><input type="text" name="Phone" required><br /><br />
		<input type="submit" name="submit" value="Register" id="bot" required>
		</div>
	</form>
	<br /><a href="index.php"><button style="position:relative;">Back to login</button></a>
</div>

</body>
</html>