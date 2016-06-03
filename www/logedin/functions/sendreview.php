<?php
session_start();
require_once('c:/wamp/phps/mysql_connect.php');

$query = 'INSERT INTO reviews(Product,Header,Review,rating,Creator) VALUES ('.$_POST['Product'].',"'.$_POST['Header'].'","'.$_POST['Review'].'",'.$_POST['Rating'].','.$_POST['Id'].');';
mysqli_query($dbc,$query);
header('location: ../logedin.php');
?>