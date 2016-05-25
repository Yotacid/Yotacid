<?php
  require_once('../../phps/mysql_connect.php');
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
?>
<nav>
 <div id="head">
   <ul>
   <br /><a href="http://www.nobrain.dk" target="_BLANKs"><img src="../pictures/jaok.png"></a>
    <a href="logedin.php"><li>Jaok Bodypillows</li></a>
    <a href="profile.php"><li>Profile</li></a>
    <a href="support.php"><li>Support</li></a>
    <a href="functions/logout.php"><li>Log out</li></a>
    <a href="http://www.lemonparty.org"><img src="../pictures/jaoka.png" target="_BLANK"></a>
    </ul>
  </div>
</nav>
<style type="text/css">img{width: 3%;}</style>
<?php
echo "<p id='loginname'>Welcome back "; echo $_SESSION['name']; echo "</p>";
?>