<?php
session_start();
$Username=$_SESSION['Username'];
echo $Username;

	
mysql_connect("localhost","root","");
	mysql_select_db("coffee town");
			
					$sql ="UPDATE paragkeliespl SET paradothike = 'nai'";
					mysql_query($sql);
					
					$sql ="UPDATE dianomeis SET available = 'available'";
					mysql_query($sql);

echo "<SCRIPT type='text/javascript'> //not showing me this
						
							window.location.replace(\"http://localhost/ISTOSELIDA/deliveras.php\");
						</SCRIPT>";
?>
