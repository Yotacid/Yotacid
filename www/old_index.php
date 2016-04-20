<?php

	require_once('../phps/mysql_connect.php');
	// Ger variabeln $dbc som �r anslutningen till databasen.
	
	$query = 'SELECT City,Population FROM Cities where population>=5000000 order by Population desc;';
	$query2 = 'SELECT City,Population,Latitude From Cities where latitude>=0 order by City;';
	$result = mysqli_query($dbc, $query);
	
	$result2 = mysqli_query($dbc, $query2);
	echo '<table border="solid">';
	while($row = mysqli_fetch_array($result)){
		
	echo '<tr><td>' . ucfirst($row['City']) . ' </td> <td> ' . $row['Population'] . '</td></tr>';
	
	}
	echo '</table>';
	echo '<table border="solid">';
	while($row = mysqli_fetch_array($result2)){
	echo '<tr><td>' . $row['City'] . ' </td> <td> ' . $row['Population'] . ' </td> <td>' . $row['Latitude'] . ' </td> </tr> ';
	
	}
	echo '</table>';
?>