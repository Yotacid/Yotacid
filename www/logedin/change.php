<!DOCTYPE html>
<html>
<head>
	<title>Change credentials</title>
	<link rel="stylesheet" type="text/css" href="includes/css.css">
</head>
<body>
	<?php include 'includes/dropa.php'; ?>
<div id="full">
	<div id="left">
		<?php include 'includes/profileinfo.php'; ?>
	</div>
	<div id="right">
		<form method="post" action="functions/credchange.php">
			<p>New name: </p>
			<input type="text" name="name">
			<p>New surname:</p>
			<input type="text" name="surname">
			<p>New mail: </p>
			<input type="text" name="mail">
			<p>Adress:</p>
			<input type="text" name="adress">
			<p>Phone:</p>
			<input type="text" name="phone">
			<input type="submit">
		</form>
	</div>
</div>
</body>
</html>