<?php
session_start();
$Username=$_SESSION['Username'];
echo $Username;

	
mysql_connect("localhost","root","");
	mysql_select_db("coffee town");

	if(isset($_POST['Username']))
	{
		$checkdata=" SELECT Username FROM dianomeis WHERE Username='$Username' ";
		$query=mysql_query($checkdata);

		if(mysql_num_rows($query)>0)
		{
			
					$sql ="UPDATE dianomeis SET on_service = 'offline' WHERE Username ='$Username'";
					mysql_query($sql);
					$sql ="UPDATE dianomeis SET available = 'available' WHERE Username ='$Username'";
					mysql_query($sql);
					
					$sql ="UPDATE dianomeis SET out_time = CURRENT_TIMESTAMP WHERE Username='$Username'";
					mysql_query($sql);
				
				
					$result = mysql_query("SELECT TIMEDIFF(out_time, in_time) FROM dianomeis WHERE Username='$Username'");
					$row = mysql_fetch_array($result);
					$duration = $row[0];
					//echo $duration;
				
					$sql ="UPDATE dianomeis SET duration='$duration' WHERE Username='$Username'";
					mysql_query($sql);
					$result = mysql_query("SELECT TIME_TO_SEC(duration) FROM dianomeis WHERE Username='$Username'");
					$row = mysql_fetch_array($result);
					$duration1 = $row[0];
					
					$result = mysql_query("SELECT euro FROM dianomeis WHERE Username='$Username'");
					$row = mysql_fetch_array($result);
					$duration2 = $row[0];
					//echo $duration2;
					$duration1 = (($duration1 / 3600) * 5)+ $duration2;
					
					$sql ="UPDATE dianomeis SET euro=$duration1 WHERE Username='$Username'"; 
					mysql_query($sql);
					//echo $duration1;
		}
	
	}
	

echo "<SCRIPT type='text/javascript'> //not showing me this
							
							window.location.replace(\"http://localhost/ISTOSELIDA/log in.php\");
						</SCRIPT>";
?>