<?php require_once('../../../phps/mysql_connect.php'); session_start(); ?>
<?php
	if($_POST['name'] != "") {
	$query = "UPDATE users SET Name='" . $_POST['name'] . "' WHERE Id='" . $_SESSION['id'] . "'";
	mysqli_query($dbc,$query);
	$_SESSION['name'] = $_POST['name'];
	}
	if($_POST['surname'] != "") {
	$query = "UPDATE users SET Surname='" . $_POST['surname'] . "' WHERE Id='" . $_SESSION['id'] . "'";
	mysqli_query($dbc,$query);
	$_SESSION['surname'] = $_POST['surname'];
	}
	if($_POST['mail'] != "") {
	$query = "UPDATE users SET Mail='" . $_POST['mail'] . "' WHERE Id='" . $_SESSION['id'] . "'";
	mysqli_query($dbc,$query);
	$_SESSION['mail'] = $_POST['mail'];
	}
	if($_POST['adress'] != "") {
	$query = "UPDATE users SET Adress='" . $_POST['adress'] . "' WHERE Id='" . $_SESSION['id'] . "'";
	mysqli_query($dbc,$query);
	$_SESSION['adress'] = $_POST['adress'];
	}
	if($_POST['phone'] != "") {
	$query = "UPDATE users SET Phone='" . $_POST['phone'] . "' WHERE Id='" . $_SESSION['id'] . "'";
	mysqli_query($dbc,$query);
	$_SESSION['phone'] = $_POST['phone'];
	}
	header('Location: ../logedin.php')
?>