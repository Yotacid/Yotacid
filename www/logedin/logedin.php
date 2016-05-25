<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="includes/css.css">
</head>
<body>
<?php include 'includes/drop.php';?>

	<?php 
	$query = 'SELECT * FROM product ORDER BY Product;';
	$sql = mysqli_query($dbc,$query);

	echo "<h1 style='text-align:center;'>Products:</h1><br />";
	while($row = mysqli_fetch_array($sql)){
	
	echo "<div id='ticket'><div id='inticket'><p>";
	echo $row['Name'];
	echo "</p></div><div id='inticket'><p>";
	echo "<img src='products/";
	echo $row['Pic'];
	echo "' id='bild'><p>";
	echo $row['shortdescription'];
	echo "<br /><br />";
	echo $row['Description'];
	echo "<br /><br /><br /><a href='functions/addcart.php'><button>Add to cart</button></a><br /><br />";
	echo $row ['Price'];
	echo ":- </div></div>";
}
?>
</body>
</html>