<?php
	include 'includes/head.php';
	echo "<p id='loginname'>Welcome "; echo $_SESSION['id']; echo " user</p>";
	include 'functions/readsupport.php';
?>
</body>