<?php
	$pass = 0;
	$phone = 0;
	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$phone=$_POST['phone'];

		

	$email = test_input($_POST["email"]);
		if (!filter_var($email, FILTER_VALIDATE_EMAIL))
			{
			   $message = 'SORRY .Invalid email format please try again ';
				echo "<SCRIPT type='text/javascript'> //not showing me this
				alert('$message');
				window.location.replace(\"http://localhost/ISTOSELIDA/log in.php\");
				</SCRIPT>";
					exit();
			}

	 
	function test_input($data) 
	{
		 $data = trim($data);
		 $data = stripslashes($data);
		 $data = htmlspecialchars($data);
		 return $data;
	}
		
	if (empty($pass)) 
		{
			$message = 'SORRY .Your password is empty \nPLEASE TRY AGAIN';
			echo "<SCRIPT type='text/javascript'> //not showing me this
			alert('$message');
			window.location.replace(\"http://localhost/ISTOSELIDA/log in.php\");
			</SCRIPT>";
			exit();
		}
		
		if (empty($phone))
		{
			$message = 'SORRY .Your telephone is empty';
			echo "<SCRIPT type='text/javascript'> //not showing me this
			alert('$message');
			window.location.replace(\"http://localhost/ISTOSELIDA/log in.php\");
			</SCRIPT>";
			exit();
		}
		
		if(!empty($_POST["pass"]) && ($_POST["pass"] == $_POST["pass"])) 
		{
			$pass = test_input($_POST["pass"]);
			$pass = test_input($_POST["pass"]);
		
		
		
			if (strlen($_POST["pass"]) <= '8') 
			{
			   $message = 'SORRY .Your password must contain at least 8 Characters \nPLEASE TRY AGAIN';
				echo "<SCRIPT type='text/javascript'> //not showing me this
				alert('$message');
				window.location.replace(\"http://localhost/ISTOSELIDA/log in.php\");
				</SCRIPT>";
				exit();
			}
		
			elseif(!preg_match("#[0-9]+#",$pass))
			{
				$message = 'SORRY .Your Password Must Contain At Least 1 Number \nPLEASE TRY AGAIN';
				echo "<SCRIPT type='text/javascript'> //not showing me this
				alert('$message');
				window.location.replace(\"http://localhost/ISTOSELIDA/log in.php\");
				</SCRIPT>";
				exit();
			}
	  
		}
			elseif(!empty($_POST["pass"])) 
			{
				$cpasswordErr = "Please Check You've Entered Or Confirmed Your Password!";
			} 
			else 
			{
				 $passwordErr = "Please enter password   ";
			}

		
	mysql_connect("localhost","root","");
	mysql_select_db("coffee town");

	if(isset($_POST['email']))
	{
		$email=$_POST['email'];
		$checkdata=" SELECT email FROM pelatis WHERE email='$email' ";
		$query=mysql_query($checkdata);

		if(mysql_num_rows($query)>0)
		{
			$message = 'SORRY. Your email Already Exist. Please try again';
			echo "<SCRIPT type='text/javascript'> //not showing me this
			alert('$message');
			window.location.replace(\"http://localhost/ISTOSELIDA/log in.php\");
			</SCRIPT>";
			 exit();
		}
		else
		{
			$message = 'SUCESFULL .You can continue with your order.';
			echo "<SCRIPT type='text/javascript'> //not showing me this
			alert('$message');
			window.location.replace(\"http://localhost/ISTOSELIDA/menu.php\");
			</SCRIPT>";
		 }
	 
		$select="insert into pelatis(email,pass,phone) values ('".$email."','".$pass."','".$phone."')";
		$sql=mysql_query($select);

		print '<script type="text/javascript">';
		print 'alert("the data is inserted")';
		print '</script>';
		exit();
	}

	mysql_close();
?>