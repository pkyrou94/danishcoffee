<!DOCTYPE html>
<html>
<body>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

  
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">


    <link href="css/business-casual.css" rel="stylesheet">
</head>

<div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Danish Coffee Shops</div>
		<div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Coffee| Snacks | Delivery</div>


  <!-- <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="logn in.html">Logn in or Sign up
                <span class="sr-only">(current)</span>
              </a>
          </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="stores.php">Stores</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="contact.html">Contact</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>-->
	<div class="bg-faded p-4 my-4">
	
		<form action="updatepo.php" method="POST">
			
			<h3><center>PRODUCTS LEFT</center></h3>
			<br>
			<div class="row">
				<div class="form-group col-lg-4">
					<label class="text-heading"><h5>Tiropita</label></h5>
					<input type="text" name="tiropita" class="form-control"value="0">
				</div>	
				
				<div class="form-group col-lg-4">
					<label class="text-heading"><h5>Xortopita</label></h5>
					<input type="text" name="xortopita" class="form-control"value="0">
				</div>	
				
				<div class="form-group col-lg-4">
					<label class="text-heading"><h5>Koulouri</label></h5>
					<input type="text" name="koulouri" class="form-control"value="0">
				</div>
				
				<div class="form-group col-lg-4">
					<label class="text-heading"><h5>Tost</label></h5>
					<input type="text" name="tost" class="form-control"value="0">
				</div>
				
				<div class="form-group col-lg-4">
					<label class="text-heading"><h5>Cake</label></h5>
					<input type="text" name="cake" class="form-control" value="0">	
				</div>	
				
				<button type="submit" name="submit" style="height:7%" class="btn btn-warning div1">UPDATE</button>					
				
			</div>
		</form>
<?php

echo "<br/>";
echo "<table style='border: solid  black;'>";
echo "APOTHEMATA PL OLGAS";
 echo "<tr><th>Tiropita</th><th>Hortopita</th><th>Kuluri</th><th>tost</th><th>cake</th></tr>";

class TableRows extends RecursiveIteratorIterator { 
    function __construct($it) { 
        parent::__construct($it, self::LEAVES_ONLY); 
    }

    function current() {
        return "<td style='width: 150px; border:  solid black;'>" . parent::current(). "</td>";
    }

    function beginChildren() { 
        echo "<tr>"; 
    } 

    function endChildren() { 
        echo "</tr>" . "\n";
    } 
	
} 

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "coffee town";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT tiropita ,hortpita,kuluri , tost, cake FROM apothematapl"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";

echo "<br/><br/>";

echo "<table style='border: solid  black;'>";
echo "DIATHESIMOTITA SE DELYVERY";
 echo "<tr><th>Onomateponimo</th><th>Username</th><th>on_service</th></tr>";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT onomateponimo, Username, on_service  FROM dianomeis WHERE on_service='online'"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
echo "<br/><br/>";

echo "<table style='border: solid  black;'>";
echo "PARAGKELIES";
 echo "<tr><th>ellinikos</th><th>frappe</th><th>espresso</th><th>cuppuccino</th><th>filtercoffe</th><th>tiropita</th><th>koulouri</th><th>tost</th><th>cake</th><th>xortopita</th><th>dieuthinsi</th><th>total</th><th>dianomeas<th></tr>";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $stmt = $conn->prepare("SELECT ellinikos , frape , espresso , cappuccino , filtercoffee , tiropita , koulouri , tost , cake , xortopita , dieuthinsi , total , dianomeas FROM paragkeliespl"); 
    $stmt->execute();

    // set the resulting array to associative
    $result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

    foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v) { 
        echo $v;
    }
}
catch(PDOException $e) {
    echo "Error: " . $e->getMessage();
}
$conn = null;
echo "</table>";
?> 

</div>
</body>
</html>