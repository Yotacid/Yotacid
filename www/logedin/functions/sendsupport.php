<?php
	session_start();
	require_once('../../../phps/mysql_connect.php');
	
	$query = "Insert into support(User_Id, Product, Support) values ('" . $_SESSION['id'] . "','" . $_POST['product'] . "','" . $_POST['message'] . "');";
	mysqli_query($dbc,$query);

	header ("Location: ../tickets.php")
?>