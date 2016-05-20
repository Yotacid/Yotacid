<?php
session_start(); // Starta sessionen ( Alltid �verst)

require_once('c:/wamp/phps/mysql_connect.php'); // Databasanslutning (ER S�KV�G)
// Ger variabel $dbc som �r databasanslutningen.
 
$query = 'SELECT * FROM admin WHERE Name="'.$_POST['mail'].'";';
$result = mysqli_query($dbc,$query); // Ställ fråga till databasen
$row = mysqli_fetch_array($result); //Hämta den rad man f�r som svar (Om det finns n�gon)
//sparar lösenord så att man blir kickad om jag ändrar lösenord

$query2 = 'SELECT Password FROM admin WHERE Password="' . $_POST['Password'] . '";'; // H�mta Användarnamn och Lösenord där det instkrivna uppgifterna stämmer överens. (Om de finns)
$result2 = mysqli_query($dbc,$query2);
$password = mysqli_fetch_array($result2);

if($password){ // Om Anv�ndarnamnet i databasen �r samma som fr�n formul�ret
	$_SESSION['loggedIn'] = TRUE; // Inloggad SANTs
	$_SESSION['timeout'] = time(); // Timeout = Nuvarande tid 
	$_SESSION['id'] = "Admin";
	$_SESSION['pw'] = $_POST['Password'];
	
	header('Location: ../logedin/admin/index.php'); // Skickas till index.php för admin
}else{ // Om användarnamnen inte stämmer överens
	$_SESSION['loggedIn'] = FALSE; // Inloggad FALSKT
	header('Location: dask.php'); // Skickas till index.php där min login screen ligger
}
?>