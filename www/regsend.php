<?php
session_start(); // Starta sessionen

require_once('../phps/mysql_connect.php');
$query = "Insert into users (Name, Surname, Mail, Personal, Postal, Phone) values ('" . $_POST['Name'] . "','" . $_POST['Surname'] . "',
 '" . $_POST['Mail'] . "','".$_POST['Personal'] . "','" . $_POST['Postal'] . "','" . $_POST['Phone'] . "');";
mysqli_query($dbc,$query);

$query = "SELECT Id FROM users ORDER BY Id DESC LIMIT 1";
$result = mysqli_query($dbc,$query);
$id = mysqli_fetch_array($result);

$pw = "insert into password(Id,Password) values (".$id['Id'].",PASSWORD('".$_POST['Password']."'));";
mysqli_query($dbc,$pw);

header("location: index.php");
?>