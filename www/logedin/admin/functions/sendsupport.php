<?php
	session_start();
	require_once('c:/wamp/phps/mysql_connect.php');
	
	$query = 'UPDATE support SET Reply = "'.$_POST['rep'].'" WHERE `support`.`Id` =("'.$_GET['id'].'"); ';
	mysqli_query($dbc,$query);
	header ("Location: ../adminsupport.php");
?>