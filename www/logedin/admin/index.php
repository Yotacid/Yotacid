<?php
  include 'includes/head.php';
  echo "<p id='loginname'>Welcome "; echo $_SESSION['id']; echo " user</p>";
?>
<form method="post" action="functions/addproduct.php">
  <div>
    <p>Product name:</p>
    <input type="text" name="name"><br />
    <p>Picture name:</p>
    <input type="text" name="picture"><br />
    <p>Description:</p>
    <textarea type="text" name="description"></textarea><br />
    <p>Short description:</p>
    <textarea type="text" name="short"></textarea>
    <input type="submit">
  </div>
</form>
</body