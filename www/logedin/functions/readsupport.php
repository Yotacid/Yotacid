<?php 
	$query = 'SELECT * FROM support WHERE User_Id='.$_SESSION['id'].';';
	$sql = mysqli_query($dbc,$query);

echo "<h1 style='text-align:center;'>Tickets:</h1><br />";
while($row = mysqli_fetch_array($sql)){

	echo "<div id='ticket'><div id='inticket'>";
	echo $row['Support'];
	echo "</div><br /><br /><br /><div id='inticket'>";
	echo $row['Reply'];
	echo "</div></Div>";
}
?>