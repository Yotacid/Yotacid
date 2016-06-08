<?php 
	require_once('c:/wamp/phps/mysql_connect.php');
	session_start(); // Starta session

	if(!@$_SESSION['loggedIn']){ // Om man inte är inloggad
	header('Location: /index.php'); // Skickas till login.php
	}
	if(@$_SESSION['timeout']+ 60*10 < time()){ //Om Sessionstiden + 10(60sekunder*10) minuter är mindre än nuvarande tid
	session_destroy(); // Avsluta sessionen
	session_unset(); // Avsluta sessionen (gammalt sätt)
	}else{ //Sessionen fortfarande aktiv

	$money = $_POST['Amount'] * $_POST['Price'];
	$check = 'SELECT * FROM cart WHERE Id='.$_SESSION['id'].';';
	$resultat = mysqli_fetch_array(mysqli_query($dbc,$check));

	if($resultat) {
	$Price = $_POST['Amount'] * $_POST['Price'];
	$query = 'UPDATE cart SET Price='.$Price.' , Amount='.$_POST['Amount'].' WHERE Id = '.$_SESSION['id'].' AND Product='.$_POST['Product'].';';
	mysqli_query($dbc,$query);
	
	header('location: ../logedin.php');
	}
	else {
		$Price = $_POST['Amount'] * $_POST['Price'];
		$query = 'INSERT INTO cart (Id,Product,Amount,Price) VALUES ('.$_SESSION['id'].','.$_POST['Product'].','.$_POST['Amount'].','.$Price.');';
		mysqli_query($dbc,$query);
		header('location: ../logedin.php');
	}
	}
	//header('location: ../logedin.php');
?>