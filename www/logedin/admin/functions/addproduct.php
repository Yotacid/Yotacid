<?php 
	require_once('c:/wamp/phps/mysql_connect.php');
	session_start(); // Starta session

	$query2 = 'SELECT Password FROM admin WHERE Password="' . $_SESSION['pw'] . '";';  
	$result2 = mysqli_query($dbc,$query2);
	$password = mysqli_fetch_array($result2);

	if($password){  //DETTA KOLLAR SÅ ATT OM JAG UPPDATERAR LÖSENORDET PÅ ADMIN SÅ KASTAS ALLA SOM ÄR INNE PÅ NÄTVERKET UT
	$_SESSION['loggedIn'] = TRUE;
	$_SESSION['timeout'] = time();
	}else{ // Om användarnamnen inte stämmer överens
	$_SESSION['loggedIn'] = FALSE; // Om det inte stämmer så stängs sessionen
	session_destroy();
	session_unset();
	}

	if(!@$_SESSION['loggedIn']){ // Om man inte är inloggad
	header('Location: functions/incorrect.php'); // Skickas till login.php
	}
	if(@$_SESSION['timeout']+ 60*10 < time()){ //Om Sessionstiden + 10(60sekunder*10) minuter är mindre än nuvarande tid
	session_destroy(); // Avsluta sessionen
	session_unset(); // Avsluta sessionen (gammalt sätt)
	}else{ //Sessionen fortfarande aktiv
	$_SESSION['timeout'] = time(); // Uppdatera sessionstiden
	}
?><?php 
	$query = "INSERT INTO product(Name,Pic,Description,shortdescription,Price) VALUES ('".$_POST['name']."','".$_POST['picture']."','".$_POST['description']."','".$_POST['short']."','".$_POST['price']."');";
	mysqli_query($dbc,$query);
	header('location: ../index.php')
?>