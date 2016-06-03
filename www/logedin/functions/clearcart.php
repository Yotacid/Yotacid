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
    $_SESSION['timeout'] = time(); // Uppdatera sessionstiden
  }
  $query = 'DELETE FROM cart WHERE Id='.$_SESSION['id'].';';
  mysqli_query($dbc,$query);
  header('location: ../logedin.php');
?>