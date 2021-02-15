<?php

$tiropita=$_POST['tiropita'];
	$xortopita=$_POST['xortopita'];
	$koulouri=$_POST['koulouri'];
	$tost=$_POST['tost'];
	$cake=$_POST['cake'];

	
	
	
mysql_connect("localhost","root","");
	mysql_select_db("coffee town");
	
	
	$sql ="UPDATE apothematapg 
		SET tiropita=tiropita+$tiropita , kuluri=kuluri+$koulouri , tost=tost+$tost , cake=cake+$cake , hortpita=hortpita+$xortopita";
		mysql_query($sql);
	
	echo "<SCRIPT type='text/javascript'> //not showing me this
							
							window.location.replace(\"http://localhost/ISTOSELIDA/managerpg.php\");
						</SCRIPT>";
?>