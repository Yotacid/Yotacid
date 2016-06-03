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
?>
<!DOCTYPE html>
<html>
<head>
	<title>Read reviews</title>
	<link rel="stylesheet" type="text/css" href="../includes/css.css">
</head>
<body>

<?php 
	$query = 'SELECT * FROM reviews WHERE Product='.$_POST['Product'].';';
	$sql = mysqli_query($dbc,$query);
	echo '<p>Reviews on '.$_POST['Name'].'</p><a href="../logedin.php" id="back">Back to start</a><br /><br />';
	echo '<div id="all">';
	while($row = mysqli_fetch_array($sql)){
		echo '<div id="review">';
		echo $row['Header'];
		echo '<br />';
		echo $row['rating'];
		echo '/5<br /><br />';
		echo $row['Review'];
		echo '<br /></div>';
	}
?>
	</div>
</body>
</html>