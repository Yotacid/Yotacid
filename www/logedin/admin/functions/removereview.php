<?php
	session_start();
	require_once('c:/wamp/phps/mysql_connect.php');

	$query = "DELETE FROM reviews WHERE id='".$_GET['id']."';";
	mysqli_query($dbc,$query);

	header('location: ../reviews.php');
?>