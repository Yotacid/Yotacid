<?php 
	$query = 'SELECT * FROM support WHERE User_Id='.$_SESSION['id'].' ORDER BY id DESC;';
	$sql = mysqli_query($dbc,$query);

echo "<h1 style='text-align:center;'>Tickets:</h1><br />";
while($row = mysqli_fetch_array($sql)){
	echo "<div id='ticket'><div id='inticket'><p>";
	echo $row['Support'];
	echo "</p></div><br /><br /><br /><div id='inticket'><p>";
	echo $row['Reply'];
	echo "</p><a href='functions/remove.php?id=".$row['Id']."'><button>Remove</button></a></div></Div>";
}
?>