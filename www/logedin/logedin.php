<!DOCTYPE html>
<html>
 <head>
<?php
  session_start(); // Starta session

  if(!@$_SESSION['loggedIn']){ // Om man inte är inloggad
    header('Location: login.php'); // Skickas till login.php
  }


  if(@$_SESSION['timeout']+ 60*10 < time()){ //Om Sessionstiden + 10(60sekunder*10) minuter är mindre än nuvarande tid
    session_destroy(); // Avsluta sessionen
    session_unset(); // Avsluta sessionen (gammalt sätt)
  }else{ //Sessionen fortfarande aktiv
    $_SESSION['timeout'] = time(); // Uppdatera sessionstiden
  }
?>
   <link rel="stylesheet" type="text/css" href="css.css">
 </head>
 <body>
<?php
include 'includes/drop.php'; 
?>
</body>
</html>