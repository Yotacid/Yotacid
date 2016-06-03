<?php 
	include 'includes/head.php';

	$query = 'SELECT * FROM reviews;';
	$sql = mysqli_query($dbc,$query);

	while($row = mysqli_fetch_array($sql)){
		echo '<div id="ticket">';
		echo $row['Header'];
		echo '<br />';
		echo $row['rating'];
		echo '/5<br /><br />';
		echo $row ['Review'];
		echo '<br /><br /><a href="functions/removereview.php?id='.$row['Id'].'"><button>Remove</button></a></div>';
	}

?>
