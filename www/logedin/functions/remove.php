<?php
	session_start();
	require_once('../../../phps/mysql_connect.php');

	$query = "DELETE FROM support WHERE id='".$_GET['id']."' AND User_Id='".$_SESSION['id']."';";
	mysqli_query($dbc,$query);

	header('location: ../tickets.php');
?>