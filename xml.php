<?php
 $year = $_GET['year'];
 $month = $_GET['month'];
 
 echo "<xml>\n";
 echo "	<header>\n";
 echo "		<transaction>\n";
 echo "			<period month=\"$month\" year=\"$year\"/>\n";
 echo "		</transaction>\n";
 echo "	<header>\n";
 
 echo "	<body>\n";
 echo "		<employees>\n";
 
 mysql_connect("localhost","root","");
 mysql_select_db("coffee town");
 
 $result = mysql_query("SELECT onomateponimo, `A.M.K.A`, `A.F.M`, euro, `IBAN` FROM dianomeis");
 while ($row = mysql_fetch_assoc($result)){
	 	 echo "			<employee>\n";
	 $name = $row['onomateponimo'];
	 $pieces =  explode(' ', $name);
	 echo "					<firstname>".$pieces[0]."</firstname>\n";
	 echo "					<lastname>".$pieces[1]."</lastname>\n";
	 echo "					<amka>".$row['A.M.K.A']."</amka>\n";
	 echo "					<afm>".$row['A.F.M']."</afm>\n";
	 echo "					<iban>".$row['IBAN']."</iban>\n";
	 echo "					<amount>".$row['euro']."</amount>\n";
	 echo "			</employee>\n";
 }
 
 $result = mysql_query("SELECT onomateponimo, `AMKA`, `AFM`, `IBAN` FROM manager");
 while ($row = mysql_fetch_assoc($result)){
	 	 echo "			<employee>\n";
	 $name = $row['onomateponimo'];
	 $pieces =  explode(' ', $name);
	 echo "					<firstname>".$pieces[0]."</firstname>\n";
	 echo "					<lastname>".$pieces[1]."</lastname>\n";
	 echo "					<amka>".$row['AMKA']."</amka>\n";
	 echo "					<afm>".$row['AFM']."</afm>\n";
	 echo "					<iban>".$row['IBAN']."</iban>\n";
	 //echo "					<amount>".$row['euro']."</amount>\n";
	 echo "			</employee>\n";
 }
 
 echo "		</employees>\n";
 echo "	</body>\n";
 
 
 
 echo "</xml>";
 
 
 	