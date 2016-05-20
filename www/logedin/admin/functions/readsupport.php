<?php 
	$query = 'SELECT * FROM support ORDER BY id DESC;';
	$sql = mysqli_query($dbc,$query);

echo "<h1 style='text-align:center;'>Tickets:</h1><br />";
while($row = mysqli_fetch_array($sql)){
	echo "<div id='ticket'><div id='inticket'><p>";
	echo $row['Support'];
	echo "</p></div><br /><br /><br /><div id='inticket'><p>";
	if (!isset($row['Reply'])) {
		echo '<form action="functions/sendsupport.php?id='.$row['Id'].'" method="post"><input type="text" name="rep"><input type="submit"></form>';
	}
	if(isset($row['Reply'])){
	echo $row['Reply'];
	}
	echo "</p><a href='functions/remove.php?id=".$row['Id']."'><button>Remove</button></a></div></Div>";
}
?>