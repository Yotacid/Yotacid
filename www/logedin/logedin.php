<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="includes/css.css">
</head>
<body>
<?php include 'includes/drop.php'; 
$amount = 0;
$price = 0;
$query = 'SELECT * FROM cart WHERE Id='.$_SESSION['id'].';';
$sql = mysqli_query($dbc,$query);

while($row = mysqli_fetch_array($sql)){
	$amount = $amount + $row['Amount'];
	$price = $price + $row['Price'];
}
echo '<p>Your cart will cost ';
echo $price;
echo ':-</p><a href="functions/clearcart.php"><button>Clear cart</button></a>';
?>
<?php 
	$query = 'SELECT * FROM product ORDER BY Product;';
	$sql = mysqli_query($dbc,$query);
	echo "<h1 style='text-align:center;'>Products:</h1><br />";
	while($row = mysqli_fetch_array($sql)){
	echo "<div id='tickets'><div id='inticket'><p>";
	echo $row['Name'];
	echo "</p></div><div id='inticket'><p>";
	echo "<img onmousedown=showProduct(".$row["Product"].") src='products/";
	echo $row['Pic'];
	echo "' id='bild'><p>";
	echo $row['shortdescription'];
	echo "<br /><br />";
	echo $row['Description'];
	echo '<form method="POST" action="functions/cart.php"><p>Amount:</p><input type="number" name="Amount" required><br /><input type="text" value="'.$row['Product'].'" style="display:none;" name="Product"><input type="text" value="'.$row['Price'].'" name="Price"style="display:none;"><br /><input type="submit" value="Add to cart"></form><br /><p>';
	echo $row ['Price'];
	echo ":- </p></div></div>";
	echo '
<div class="showProduct" id="showProduct'.$row['Product'].'">
<h2 style="text-align:center;">'.$row['Name'].'</h2>';
	$querytwo = 'SELECT * FROM reviews WHERE Product='.$row['Product'].';';
	$sqltwo = mysqli_query($dbc,$querytwo);
	$rating = 0;
	$grade = 0;
	while($rows = mysqli_fetch_array($sqltwo)){
		$grade = $grade + $rows['rating'];
		$rating++;
	}
	
	if($rating != 0) {
		echo '<p>This product is rated: ';
		echo $grade / $rating;
		echo '/ 5 </p><br /><div id="container">';
	}
	if($rating == 0){
		echo 'This product is not rated yet</p><br /><div id="container">';
	}
	echo '
	<img src="products/'.$row['Pic'].'" onmousedown="hideProduct('.$row['Product'].')">
	<div id="rightc">';
	include 'includes/review.php';
	echo '</div>
	</div>
	</div> ';
}?>
<script>
function showProduct(n){
	div = document.getElementById('showProduct'+n);
	div.style.display = "block";
}
function hideProduct(n){
	div = document.getElementById('showProduct'+n);
	div.style.display = "none";
}</script>
</body>
</html>