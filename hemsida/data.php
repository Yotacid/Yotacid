<?php

require_once('../phps/mysql_connect.php');

$query = 'INSERT INTO reports(Namn, Efternamn, Error, Description, Rating)
Values("'

. $_POST['Namn']'","'
. $_POST['Efternamn']'","'
. $_POST['Error']'"."'
. $_POST['Desc']'"."'
. $_POST['Rating']
'")

?>
