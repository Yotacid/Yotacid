<?php 
	echo $row['Description'];
	echo '<h2>Review this product:</h2>
	<form action="functions/sendreview.php" method="POST">
	<p>Header: </p><input type="text" name="Header" REQUIRED>
	<p>Review: </p><textarea type "text" name="Review" REQUIRED></textarea>
	<p>Rating </p><select name="Rating">
		<option value="1">1</option>
		<option value="2">2</option>
		<option value="3">3</option>
		<option value="4">4</option>
		<option selected="selected" value="5">5</option>
	</select>
	<input type="text" value="'.$row['Product'].'" name="Product" style="display:none;">
	<input type="text" value="'.$_SESSION['id'].'" name="Id" style="display:none;">
	<input type="submit">
	</form>
	<br />
	<form action="functions/readreview.php" method="POST">
	<input type="text" value="'.$row['Product'].'" style="display:none;" name="Product">
	<input type="text" value="'.$row['Name'].'" style="display:none;" name="Name">
	<input type="submit" value="Read Reviews">
	</form>
	';
?>