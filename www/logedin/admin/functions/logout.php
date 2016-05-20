<?php
	session_destroy();
	session_unset();

	if(!@$_SESSION['loggedIn']){ //Om den lyckats logga ut dig så skickas du till index.php
		header('Location: ../../byebye/dask.php');
	}
?>