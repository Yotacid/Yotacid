<?php
session_start(); // Starta sessionen ( Alltid �verst)

require_once('../phps/mysql_connect.php'); // Databasanslutning (ER S�KV�G)
// Ger variabel $dbc som �r databasanslutningen.
 
$query = 'SELECT Id FROM users WHERE Mail="'.$_POST['mail'].'";';
$result = mysqli_query($dbc,$query); // Ställ fråga till databasen
$id = mysqli_fetch_array($result)['Id']; //Hämta den rad man f�r som svar (Om det finns n�gon)


$query2 = 'SELECT Password FROM password WHERE Password=PASSWORD("' . $_POST['Password'] . '") AND Id='.$id.';'; // H�mta Användarnamn och Lösenord där det instkrivna uppgifterna stämmer överens. (Om de finns)
$result2 = mysqli_query($dbc,$query2);
$password = mysqli_fetch_array($result2);

if($password){ // Om Anv�ndarnamnet i databasen �r samma som fr�n formul�ret
	$_SESSION['loggedIn'] = TRUE; // Inloggad SANTs
	$_SESSION['timeout'] = time(); // Timeout = Nuvarande tid 
	header('Location: logedin/logedin.php'); // Skickas till index.php
}else{ // Om användarnamnen inte stämmer överens
	$_SESSION['loggedIn'] = FALSE; // Inloggad FALSKT
	header('Location: dask.php'); // Skickas till index.php där min login screen ligger
}
?>