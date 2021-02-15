<?php		
	
	$ellinikos    = $_POST['ellinikos'];
	$frape        = $_POST['frape'];
	$espresso     = $_POST['espresso'];
	$cappuccino   = $_POST['cappuccino'];
	$filtercoffee = $_POST['filtercoffee'];

	$tiropita    = $_POST['tiropita'];
	$koulouri    = $_POST['koulouri'];
	$tost        = $_POST['tost'];
	$cake        = $_POST['cake'];
	$xortopita   = $_POST['xortopita'];
	$katastimata = $_POST['katastima'];
	
	
	$d1  = $_POST['d1'];
	$d2  = $_POST['d2'];
	$d3  = $_POST['d3'];
		
	mysql_connect("localhost","root","");
	mysql_select_db("coffee town");
	
	if ( $katastimata == "agias sofias" ) 
	{
		$result1 = mysql_query("SELECT tiropita , hortopita , kuluri , tost , cake FROM apothemataas ");
		$row1 = mysql_fetch_array($result1);
		$tiropita1 = $row1[0];
		$hortopita1 = $row1[1];
		$kuluri1 = $row1[2];
		$tost1 = $row1[3];
		$cake1 = $row1[4];
		
		if (($tiropita1 >= $tiropita) && ($hortopita1 >= $xortopita) && ($kuluri1 >= $koulouri) && ($tost1 >= $tost) && ($cake1 >= $cake))
		{
			$result = mysql_query("SELECT Username FROM dianomeis WHERE on_service='online' ORDER BY apostasias ASC LIMIT 0,1");
			$row = mysql_fetch_array($result);
			$username = $row[0];
						
			$sql ="UPDATE apothemataas 
			SET tiropita=tiropita-$tiropita , kuluri=kuluri-$koulouri , tost=tost-$tost , cake=cake-$cake , hortopita=hortopita-$xortopita";
			mysql_query($sql);
				
			$sql ="INSERT INTO paragkeliesas 
			SET ellinikos=$ellinikos , frape=$frape , espresso=$espresso , cappuccino=$cappuccino , filtercoffee=$filtercoffee , tiropita=$tiropita , koulouri=$koulouri , tost=$tost , cake=$cake , xortopita=$xortopita , dianomeas='$username' , katastima='Ag.Sophias' , anatethike='nai' ";
			mysql_query($sql);
		}
		elseif ($d2 < $d3)
		{
			echo "po";
			$result2 = mysql_query("SELECT tiropita , hortpita , kuluri , tost , cake FROM apothematapl ");
			$row2 = mysql_fetch_array($result2);
			$tiropita2 = $row2[0];
			$hortopita2 = $row2[1];
			$kuluri2 = $row2[2];
			$tost2 = $row2[3];
			$cake2 = $row2[4];
			
			if (($tiropita2 >= $tiropita) && ($hortopita2 >= $xortopita) && ($kuluri2 >= $koulouri) && ($tost2 >= $tost) && ($cake2 >= $cake))
			{
				$result = mysql_query("SELECT Username FROM dianomeis WHERE on_service='online' ORDER BY apostasipo ASC LIMIT 0,1");
				$row = mysql_fetch_array($result);
				$username = $row[0];
				$sql ="UPDATE apothematapl 
				SET tiropita=tiropita-$tiropita , kuluri=kuluri-$koulouri , tost=tost-$tost , cake=cake-$cake , hortpita=hortpita-$xortopita";
				mysql_query($sql);
		
				$sql ="INSERT INTO paragkeliespl 
				SET ellinikos=$ellinikos , frape=$frape , espresso=$espresso , cappuccino=$cappuccino , filtercoffee=$filtercoffee , tiropita=$tiropita , koulouri=$koulouri , tost=$tost , cake=$cake , xortopita=$xortopita ,dianomeas='$username' , katastima='Pl.Olgas'";
				mysql_query($sql);
			}
			else
			{
				$result1 = mysql_query("SELECT tiropita , hortpita , kuluri , tost , cake FROM apothematapg ");
				$row1 = mysql_fetch_array($result1);
				$tiropita1 = $row1[0];
				$hortopita1 = $row1[1];
				$kuluri1 = $row1[2];
				$tost1 = $row1[3];
				$cake1 = $row1[4];
				
				if (($tiropita1 >= $tiropita) && ($hortopita1 >= $xortopita) && ($kuluri1 >= $koulouri) && ($tost1 >= $tost) && ($cake1 >= $cake))
				{
					$result = mysql_query("SELECT Username FROM dianomeis WHERE on_service='online' ORDER BY apostasipg ASC LIMIT 0,1");
					$row = mysql_fetch_array($result);
					$username = $row[0];
					$sql ="UPDATE apothematapg 
					SET tiropita=tiropita-$tiropita , kuluri=kuluri-$koulouri , tost=tost-$tost , cake=cake-$cake , hortpita=hortpita-$xortopita";
					mysql_query($sql);
				
					$sql ="INSERT INTO paragkeliespg 
					SET ellinikos=$ellinikos , frape=$frape , espresso=$espresso , cappuccino=$cappuccino , filtercoffee=$filtercoffee , tiropita=$tiropita , koulouri=$koulouri , tost=$tost , cake=$cake , xortopita=$xortopita , dianomeas='$username' ,katastima='Pl.Georgiou'";
					mysql_query($sql);
				}
				else 
				{
					$message = 'SORRY. Your order can not be complited';
					echo "<SCRIPT type='text/javascript'> //not showing me this
					alert('$message');
					window.location.replace(\"http://localhost/ISTOSELIDA/menu.php\");
					</SCRIPT>";
				}		
			}
		}
	}	
	
	if ( $katastimata == "platia olgas")
	{
		$result2 = mysql_query("SELECT Username FROM dianomeis WHERE on_service='online' ORDER BY apostasipo ASC LIMIT 0,1");
		$row2 = mysql_fetch_array($result2);
		$username2 = $row2[0];
		echo $username2;
		
		$result3= mysql_query("SELECT tiropita , hortpita , kuluri , tost , cake FROM apothematapl ");
		$row3 = mysql_fetch_array($result3);
		$tiropita2 = $row3[0];
		$hortopita2 = $row3[1];
		$kuluri2 = $row3[2];
		$tost2 = $row3[3];
		$cake2 = $row3[4];
			
		if (($tiropita2 >= $tiropita) && ($hortopita2 >= $xortopita) && ($kuluri2 >= $koulouri) && ($tost2 >= $tost) && ($cake2 >= $cake))
		{
			$result = mysql_query("SELECT Username FROM dianomeis WHERE on_service='online' ORDER BY apostasipo ASC LIMIT 0,1");
			$row = mysql_fetch_array($result);
			$username = $row[0];
		
			$sql ="UPDATE apothematapl 
			SET tiropita=tiropita-$tiropita , kuluri=kuluri-$koulouri , tost=tost-$tost , cake=cake-$cake , hortpita=hortpita-$xortopita";
			mysql_query($sql);
			
			$sql ="INSERT INTO paragkeliespl 
			SET ellinikos=$ellinikos , frape=$frape , espresso=$espresso , cappuccino=$cappuccino , filtercoffee=$filtercoffee , tiropita=$tiropita , koulouri=$koulouri , tost=$tost , cake=$cake , xortopita=$xortopita , dianomeas='$username' , katastima='Pl.Olgas' , anatethike='nai'";
			mysql_query($sql);
		}
		
		elseif ($d1<$d3)
		{
			$result1 = mysql_query("SELECT tiropita , hortopita , kuluri , tost , cake FROM apothemataas ");
			$row1 = mysql_fetch_array($result1);
			$tiropita1 = $row1[0];
			$hortopita1 = $row1[1];
			$kuluri1 = $row1[2];
			$tost1 = $row1[3];
			$cake1 = $row1[4];
		
			if (($tiropita1 >= $tiropita) && ($hortopita1 >= $xortopita) && ($kuluri1 >= $koulouri) && ($tost1 >= $tost) && ($cake1 >= $cake))
			{
				$result = mysql_query("SELECT Username FROM dianomeis WHERE on_service='online' ORDER BY apostasias ASC LIMIT 0,1");
				$row = mysql_fetch_array($result);
				$username = $row[0];
		
				$sql ="UPDATE apothemataas 
				SET tiropita=tiropita-$tiropita , kuluri=kuluri-$koulouri , tost=tost-$tost , cake=cake-$cake , hortopita=hortopita-$xortopita";
				mysql_query($sql);
				
				$sql ="INSERT INTO paragkeliesas 
				SET ellinikos=$ellinikos , frape=$frape , espresso=$espresso , cappuccino=$cappuccino , filtercoffee=$filtercoffee , tiropita=$tiropita , koulouri=$koulouri , tost=$tost , cake=$cake , xortopita=$xortopita , dianomeas='$username' , katastima='Ag.Sophias' , anatethike='nai' ";
				mysql_query($sql);
			}
		}
		
		else
		{
			$result1 = mysql_query("SELECT tiropita , hortpita , kuluri , tost , cake FROM apothematapg ");
			$row1 = mysql_fetch_array($result1);
			$tiropita1 = $row1[0];
			$hortopita1 = $row1[1];
			$kuluri1 = $row1[2];
			$tost1 = $row1[3];
			$cake1 = $row1[4];

			if (($tiropita1 >= $tiropita) && ($hortopita1 >= $xortopita) && ($kuluri1 >= $koulouri) && ($tost1 >= $tost) && ($cake1 >= $cake))
			{
				$result = mysql_query("SELECT Username FROM dianomeis WHERE on_service='online' ORDER BY apostasipg ASC LIMIT 0,1");
				$row = mysql_fetch_array($result);
				$username = $row[0];
				$sql ="UPDATE apothematapg 
				SET tiropita=tiropita-$tiropita , kuluri=kuluri-$koulouri , tost=tost-$tost , cake=cake-$cake , hortpita=hortpita-$xortopita";
				mysql_query($sql);
			
				$sql ="INSERT INTO paragkeliespg 
				SET ellinikos=$ellinikos , frape=$frape , espresso=$espresso , cappuccino=$cappuccino , filtercoffee=$filtercoffee , tiropita=$tiropita , koulouri=$koulouri , tost=$tost , cake=$cake , xortopita=$xortopita , dianomeas='$username' , katastima='Pl.Georgiou' , anatethike='nai'";
				mysql_query($sql);
			}
			else
			{
				$result1 = mysql_query("SELECT tiropita , hortopita , kuluri , tost , cake FROM apothemataas ");
				$row1 = mysql_fetch_array($result1);
				$tiropita1 = $row1[0];
				$hortopita1 = $row1[1];
				$kuluri1 = $row1[2];
				$tost1 = $row1[3];
				$cake1 = $row1[4];
					
				if (($tiropita1 >= $tiropita) && ($hortopita1 >= $xortopita) && ($kuluri1 >= $koulouri) && ($tost1 >= $tost) && ($cake1 >= $cake))
				{
					$result = mysql_query("SELECT Username FROM dianomeis WHERE on_service='online' ORDER BY apostasias ASC LIMIT 0,1");
					$row = mysql_fetch_array($result);
					$username = $row[0];
					$sql ="UPDATE apothemataas 
					SET tiropita=tiropita-$tiropita , kuluri=kuluri-$koulouri , tost=tost-$tost , cake=cake-$cake , hortopita=hortopita-$xortopita";
					mysql_query($sql);
						
					$sql ="INSERT INTO paragkeliesas 
					SET ellinikos=$ellinikos , frape=$frape , espresso=$espresso , cappuccino=$cappuccino , filtercoffee=$filtercoffee , tiropita=$tiropita , koulouri=$koulouri , tost=$tost , cake=$cake , xortopita=$xortopita , dianomeas='$username' , katastima='Ag.Sophias' , anatethike='nai' ";
					mysql_query($sql);
				}
				else 
				{
					$message = 'SORRY. Your order can not be complited';
					echo "<SCRIPT type='text/javascript'> //not showing me this
					alert('$message');
					window.location.replace(\"http://localhost/ISTOSELIDA/menu.php\");
					</SCRIPT>";
				}		
			}
				
		}
	}
	
	if ( $katastimata =="platia georgiou" )
	{
		
		$result = mysql_query("SELECT Username FROM dianomeis WHERE on_service='online' ORDER BY apostasipg ASC LIMIT 0,1");
		$row = mysql_fetch_array($result);
		$username = $row[0];
		
		$result4 = mysql_query("SELECT tiropita , hortpita , kuluri , tost , cake FROM apothematapg ");
		$row4 = mysql_fetch_array($result4);
		$tiropita1 = $row4[0];
		$hortopita1 = $row4[1];
		$kuluri1 = $row4[2];
		$tost1 = $row4[3];
		$cake1 = $row4[4];
		
		if (($tiropita1 >= $tiropita) && ($hortopita1 >= $xortopita) && ($kuluri1 >= $koulouri) && ($tost1 >= $tost) && ($cake1 >= $cake))
		{
			$result = mysql_query("SELECT Username FROM dianomeis WHERE on_service='online' ORDER BY apostasipg ASC LIMIT 0,1");
			$row = mysql_fetch_array($result);
			$username = $row[0];
			
			$sql ="UPDATE apothematapg 
				SET tiropita=tiropita-$tiropita , kuluri=kuluri-$koulouri , tost=tost-$tost , cake=cake-$cake , hortpita=hortpita-$xortopita";
			mysql_query($sql);
			
			$sql ="INSERT INTO paragkeliespg 
				SET ellinikos=$ellinikos , frape=$frape , espresso=$espresso , cappuccino=$cappuccino , filtercoffee=$filtercoffee , tiropita=$tiropita , koulouri=$koulouri , tost=$tost , cake=$cake , xortopita=$xortopita , dianomeas='$username' , katastima='Pl.Georgiou' , anatethike='nai'";
				mysql_query($sql);
		}
		elseif ($d1<$d2)
		{
			$result1 = mysql_query("SELECT tiropita , hortopita , kuluri , tost , cake FROM apothemataas ");
			$row1 = mysql_fetch_array($result1);
			$tiropita1 = $row1[0];
			$hortopita1 = $row1[1];
			$kuluri1 = $row1[2];
			$tost1 = $row1[3];
			$cake1 = $row1[4];
		
			if (($tiropita1 >= $tiropita) && ($hortopita1 >= $xortopita) && ($kuluri1 >= $koulouri) && ($tost1 >= $tost) && ($cake1 >= $cake))
			{
				$result = mysql_query("SELECT Username FROM dianomeis WHERE on_service='online' ORDER BY apostasias ASC LIMIT 0,1");
				$row = mysql_fetch_array($result);
				$username = $row[0];
				$sql ="UPDATE apothemataas 
				SET tiropita=tiropita-$tiropita , kuluri=kuluri-$koulouri , tost=tost-$tost , cake=cake-$cake , hortopita=hortopita-$xortopita";
				mysql_query($sql);
				
				$sql ="INSERT INTO paragkeliesas 
				SET ellinikos=$ellinikos , frape=$frape , espresso=$espresso , cappuccino=$cappuccino , filtercoffee=$filtercoffee , tiropita=$tiropita , koulouri=$koulouri , tost=$tost , cake=$cake , xortopita=$xortopita , dianomeas='$username' , katastima='Ag.Sophias' , anatethike='nai' ";
				mysql_query($sql);
			}
		}
		else
		{
			$result2 = mysql_query("SELECT Username FROM dianomeis WHERE on_service='online' ORDER BY apostasipo ASC LIMIT 0,1");
			$row2 = mysql_fetch_array($result2);
			$username2 = $row2[0];
			echo $username2;
			
			$result3= mysql_query("SELECT tiropita , hortpita , kuluri , tost , cake FROM apothematapl ");
			$row3 = mysql_fetch_array($result3);
			$tiropita2 = $row3[0];
			$hortopita2 = $row3[1];
			$kuluri2 = $row3[2];
			$tost2 = $row3[3];
			$cake2 = $row3[4];
			
			if (($tiropita2 >= $tiropita) && ($hortopita2 >= $xortopita) && ($kuluri2 >= $koulouri) && ($tost2 >= $tost) && ($cake2 >= $cake))
			{
				$result = mysql_query("SELECT Username FROM dianomeis WHERE on_service='online' ORDER BY apostasipo ASC LIMIT 0,1");
				$row = mysql_fetch_array($result);
				$username = $row[0];
				$sql ="UPDATE apothematapl 
				SET tiropita=tiropita-$tiropita , kuluri=kuluri-$koulouri , tost=tost-$tost , cake=cake-$cake , hortpita=hortpita-$xortopita";
				mysql_query($sql);
				
				$sql ="INSERT INTO paragkeliespl 
				SET ellinikos=$ellinikos , frape=$frape , espresso=$espresso , cappuccino=$cappuccino , filtercoffee=$filtercoffee , tiropita=$tiropita , koulouri=$koulouri , tost=$tost , cake=$cake , xortopita=$xortopita , dianomeas='$username' , katastima='Pl.Olgas' , anatethike='nai'";
				mysql_query($sql);
			}
			else
			{
				$result1 = mysql_query("SELECT tiropita , hortopita , kuluri , tost , cake FROM apothemataas ");
				$row1 = mysql_fetch_array($result1);
				$tiropita1 = $row1[0];
				$hortopita1 = $row1[1];
				$kuluri1 = $row1[2];
				$tost1 = $row1[3];
				$cake1 = $row1[4];
			
				if (($tiropita1 >= $tiropita) && ($hortopita1 >= $xortopita) && ($kuluri1 >= $koulouri) && ($tost1 >= $tost) && ($cake1 >= $cake))
				{
					$result = mysql_query("SELECT Username FROM dianomeis WHERE on_service='online' ORDER BY apostasias ASC LIMIT 0,1");
					$row = mysql_fetch_array($result);
					$username = $row[0];
					$sql ="UPDATE apothemataas 
					SET tiropita=tiropita-$tiropita , kuluri=kuluri-$koulouri , tost=tost-$tost , cake=cake-$cake , hortopita=hortopita-$xortopita";
					mysql_query($sql);
						
					$sql ="INSERT INTO paragkeliesas 
					SET ellinikos=$ellinikos , frape=$frape , espresso=$espresso , cappuccino=$cappuccino , filtercoffee=$filtercoffee , tiropita=$tiropita , koulouri=$koulouri , tost=$tost , cake=$cake , xortopita=$xortopita , dianomeas='$username' , katastima='Ag.Sophias' , anatethike='nai' ";
					mysql_query($sql);
					
				}
				else 
				{
					$message = 'SORRY. Your order can not be complited';
					echo "<SCRIPT type='text/javascript'> //not showing me this
					alert('$message');
					window.location.replace(\"http://localhost/ISTOSELIDA/menu.php\");
					</SCRIPT>";
				}		
			}
			
		}
	}
	
	

					echo "<SCRIPT type='text/javascript'> //not showing me this
							
							window.location.replace(\"http://localhost/ISTOSELIDA/menu.php\");
						</SCRIPT>";
?>
	
