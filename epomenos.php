<?php

//session_start();
//$y=$_SESSION['y'];
//$y=$y+1;

$y++;
echo $y++;
mysql_connect("localhost","root","");
	mysql_select_db("coffee town");
	
	
	/*$result = mysql_query("SELECT Username FROM dianomeis ORDER BY apostasias ASC LIMIT $k,1; ");
		$row = mysql_fetch_array($result);
		$username = $row[0];
		echo $username;*/
		
	

?>