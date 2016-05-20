<?php 
	require_once('../phps/mysql_connect.php');
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="includes/css.css">
	<title>Log in to JaokPillows.com</title>
</head>
<body>
<?php include 'includes/bilder.php'; ?>
<div id="loginbox">
	<form method="post" action="functions/verification.php">
		<p>Email: </p><input type="Text" name="mail" required> <br />
		<p>Password: </p><input type="Password" name="Password" required> <br />
		<input type="submit" name="submit" value="Login" id="bot">
	</form>
	<a href="reg.php"><button>Register new account</button></a><br /><br />
	<a href="adminlogin.php"><button>Admin login</button></a>
</div>
</body>
</html>