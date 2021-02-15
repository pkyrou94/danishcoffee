<?php
$mysql_link = new mysqli('localhost', 'root', '', 'coffee town');

if (mysqli_connect_error()) 
{
	die('Connect Error (' . mysqli_connect_errno() . ') '. mysqli_connect_error());
 
}
echo "Success!";

	$mysql_link->close();
?>
