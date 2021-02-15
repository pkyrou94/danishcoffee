<?php
	//$email=$_POST['email'];
	//$pass=$_POST['pass'];
	$Username=$_POST['Username'];
	$Password=$_POST['Password'];
	$online = "online";
	session_start();
	$_SESSION['Username']=$Username;
	
	mysql_connect("localhost","root","");
	mysql_select_db("coffee town");

	if(isset($_POST['Username']))
	{
		$checkdata=" SELECT Username and Password FROM dianomeis WHERE Username='$Username' and Password='$Password' ";
		$query=mysql_query($checkdata);

		if(mysql_num_rows($query)>0)
		{
			if(isset($_POST['Password']))
			{
				$query=mysql_query($checkdata);
			
				if(mysql_num_rows($query)>0)
				{
					$sql ="UPDATE dianomeis SET on_service = 'online' WHERE Username ='$Username'";
					mysql_query($sql);
					//echo $sql; die();
		
					$sql ="UPDATE dianomeis SET in_time = CURRENT_TIMESTAMP WHERE Username='$Username'";
					mysql_query($sql);
		
					$message = 'welcome .You are in service';

					echo "<SCRIPT type='text/javascript'> //not showing me this
							alert('$message');
							window.location.replace(\"http://localhost/ISTOSELIDA/deliveras.php\");
						</SCRIPT>";
				}
			}
			exit();
		}
		
	}
	
	if(isset($_POST['Username']))
	{
		$checkdata=" SELECT Username and Password FROM manager WHERE Username='$Username' and Password='$Password' ";
		$query=mysql_query($checkdata);

		if(mysql_num_rows($query)>0)
		{
			if(isset($_POST['Password']))
			{
				$query=mysql_query($checkdata);
			
				if(mysql_num_rows($query)>0)
				{
					if ($Username == "kioannou")
					{						
						$message = 'welcome manager Andrea Antoniou';
						echo "<SCRIPT type='text/javascript'> //not showing me this
						alert('$message');
						window.location.replace(\"http://localhost/ISTOSELIDA/manageras.php\");
						</SCRIPT>";
					}
					if ($Username == "mhrodotou")
					{						
						$message = 'welcome manager Thano Constantinou';					
						echo "<SCRIPT type='text/javascript'> //not showing me this
						alert('$message');
						window.location.replace(\"http://localhost/ISTOSELIDA/managerpo.php\");
						</SCRIPT>";
					}
					if ($Username == "pkyrou")
					{						
						$message = 'welcome manager Panayioti Kyrou';
						echo "<SCRIPT type='text/javascript'> //not showing me this
						alert('$message');
						window.location.replace(\"http://localhost/ISTOSELIDA/managerpg.php\");
						</SCRIPT>";
					}
				}
			}
			exit();
		}
		
	}
	
	if(isset($_POST['Username']))
	{
		$checkdata=" SELECT email and pass FROM pelatis WHERE email='$Username' and pass='$Password' ";
		$query=mysql_query($checkdata);

		if(mysql_num_rows($query)>0)
		{
			if(isset($_POST['Password']))
			{
				$query=mysql_query($checkdata);
			
				if(mysql_num_rows($query)>0)
				{
					

					
					$message = 'welcome';

					echo "<SCRIPT type='text/javascript'> //not showing me this
							alert('$message');
							window.location.replace(\"http://localhost/ISTOSELIDA/menu.php\");
						</SCRIPT>";
				}
			}
			exit();
		}
		else
		{
			$message = 'wrong email or pass. try again';

			echo "<SCRIPT type='text/javascript'> //not showing me this
					alert('$message');
					window.location.replace(\"http://localhost/ISTOSELIDA/log in.php\");
				</SCRIPT>";
		}
		exit();
	}
	mysql_close();
?>

