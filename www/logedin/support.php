<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="includes/css.css">
</head>
<body>
<?php include 'includes/drop.php';?>
<form method="post" action="functions/sendsupport.php">
	<p>Support message</p>
	<textarea id="msg" type="text" name="message" required></textarea> <br />
	<select name="product">
		<option value="1">Jaok Body Pillow(f)</option>
		<option value="2">Jaok Body Pillow(m)</option>
		<option value="a">Shipping or transport damages</option>
		<option value="b">General questions</option>
		<option value="c">Other</option>
	</select>
	<input type="submit">
</form>
	<br /><br /><br />
	<a href="tickets.php"><div id="knapp">Display Tickets</div></a>
</body>
</html>