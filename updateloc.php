<?php





					
		
	
	
	
?>
<!DOCTYPE html>
<html lang="en">

  <head>


    <meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!--Tab icon-->
		<link rel="shortcut icon" href="img/24331072_10210822288896431_583442997_n.png">
		
		<title>The Danish Coffee Shop</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">
	<style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        width: 100%;
		height: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 50%;
        margin: 0;
        padding: 0;
      }
	 
    
    
	
    </style>
	</head>
	
	<body >
	
	<div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Danish Coffee Shops</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Coffee| Snacks | Delivery</div>
		


					




<div class="container">
  <div class="row">
    <div class="col-sm-6">
	<div class="bg-faded p-2 my-4" style="width: 100%; height: 250%;">
      <div id="map" style="container"></div>
	  </div>
    </div>
    <div class="col-sm-6">
      <div class="bg-faded p-2 my-4">
	 
	<p id="demo"></p>
	<form action="accept.php" method="POST">
<button type="submit" class="btn btn-info">delivered</button>
</form>
<button type="button" class="btn btn-secondary">Order Denied</button>

<form action="log out.php" method="POST">
<input type="hidden" name="Username" value="">

<button id="log out"type="submit" class="btn btn-warning">Log out</button>


</form>



<?php
	session_start();
	$Username=$_SESSION['Username'];
	
	//echo $Username;
	$d1 = $_POST['d1'];
	$d2 = $_POST['d2'];
	$d3 = $_POST['d3'];

	//echo $_POST['d1'];
	//echo $_POST['d2'];
	//echo $_POST['d3'];
	
	
	
	mysql_connect("localhost","root","");
	mysql_select_db("coffee town");
	
	
	
	$sql ="UPDATE katastimata SET apostasias = $d1 , apostasipo = $d2 , apostasipg = $d3 WHERE Username='$Username' ";	
		mysql_query($sql);
	
	$sql ="UPDATE dianomeis SET apostasias = $d1 , apostasipo = $d2 , apostasipg = $d3 WHERE Username='$Username' ";	
		mysql_query($sql);
		
	$result = mysql_query("SELECT dianomeas FROM paragkeliesas WHERE anatethike='nai' ; ");
			$row = mysql_fetch_array($result);
			$username = $row[0];
			
	if ($Username == $username)
	{
		class TableRows extends RecursiveIteratorIterator
		{ 
			function __construct($it)
			{ 
				parent::__construct($it, self::LEAVES_ONLY); 
			}

			function current() 
			{
				return "<td style='width: 150px; border:  solid black;'>" . parent::current(). "</td>";
			}
	
			function beginChildren()
			{ 
			echo "<tr>"; 
			} 

			function endChildren() 
			{ 
				echo "</tr>" . "\n";
			} 
		
		} 

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "coffee town";

		echo "<table style='border: solid  black;'>";
		echo "PARAGKELIES";
		echo "<tr><th>paradosi</th><th>magazi<th></tr>";

			try 
			{
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$stmt = $conn->prepare("SELECT dianomeas , dieuthinsi , katastima FROM paragkeliesas Where dianomeas='$Username';"); 
				$stmt->execute();

				// set the resulting array to associative
				$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

				foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v)
				{ 
					echo $v;
				}
			}
			catch(PDOException $e) 
			{
				echo "Error: " . $e->getMessage();
			}
			$conn = null;
			echo "</table>";
	}
	
	$result = mysql_query("SELECT dianomeas FROM paragkeliespl WHERE anatethike='nai' ; ");
			$row = mysql_fetch_array($result);
			$username = $row[0];
			
	if ($Username == $username)
	{
		class TableRows extends RecursiveIteratorIterator
		{ 
			function __construct($it)
			{ 
				parent::__construct($it, self::LEAVES_ONLY); 
			}

			function current() 
			{
				return "<td style='width: 150px; border:  solid black;'>" . parent::current(). "</td>";
			}
	
			function beginChildren()
			{ 
			echo "<tr>"; 
			} 

			function endChildren() 
			{ 
				echo "</tr>" . "\n";
			} 
		
		} 

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "coffee town";

		echo "<table style='border: solid  black;'>";
		echo "PARAGKELIES";
		echo "<tr><th>paradosi</th><th>magazi<th></tr>";

			try 
			{
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$stmt = $conn->prepare("SELECT dianomeas , dieuthinsi , katastima FROM paragkeliespl Where dianomeas='$Username';"); 
				$stmt->execute();

				// set the resulting array to associative
				$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

				foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v)
				{ 
					echo $v;
				}
			}
			catch(PDOException $e) 
			{
				echo "Error: " . $e->getMessage();
			}
			$conn = null;
			echo "</table>";
	}
	
	$result = mysql_query("SELECT dianomeas FROM paragkeliespg WHERE anatethike='nai' ; ");
			$row = mysql_fetch_array($result);
			$username = $row[0];
			
	if ($Username == $username)
	{
		class TableRows extends RecursiveIteratorIterator
		{ 
			function __construct($it)
			{ 
				parent::__construct($it, self::LEAVES_ONLY); 
			}

			function current() 
			{
				return "<td style='width: 150px; border:  solid black;'>" . parent::current(). "</td>";
			}
	
			function beginChildren()
			{ 
			echo "<tr>"; 
			} 

			function endChildren() 
			{ 
				echo "</tr>" . "\n";
			} 
		
		} 

		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "coffee town";

		echo "<table style='border: solid  black;'>";
		echo "PARAGKELIES";
		echo "<tr><th>paradosi</th><th>magazi<th></tr>";

			try 
			{
				$conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
				$conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
				$stmt = $conn->prepare("SELECT dianomeas , dieuthinsi , katastima FROM paragkeliespg Where dianomeas='$Username';"); 
				$stmt->execute();

				// set the resulting array to associative
				$result = $stmt->setFetchMode(PDO::FETCH_ASSOC); 

				foreach(new TableRows(new RecursiveArrayIterator($stmt->fetchAll())) as $k=>$v)
				{ 
					echo $v;
				}
			}
			catch(PDOException $e) 
			{
				echo "Error: " . $e->getMessage();
			}
			$conn = null;
			echo "</table>";
	}
?>
</div>
    </div>
    
  </div>
</div>
			


    <script>
      // Note: This example requires that you consent to location sharing when
      // prompted by your browser. If you see the error "The Geolocation service
      // failed.", it means you probably did not give permission for the browser to
      // locate you.
      var map, infoWindow;
      function initMap() {
        map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: -34.397, lng: 150.644},
          zoom: 15
        });
        infoWindow = new google.maps.InfoWindow;

        // Try HTML5 geolocation.
        if (navigator.geolocation) {
          navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
              lat: position.coords.latitude,
              lng: position.coords.longitude
            };

            infoWindow.setPosition(pos);
            infoWindow.setContent('Location found.');
            infoWindow.open(map);
            map.setCenter(pos);
          }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
          });
        } else {
          // Browser doesn't support Geolocation
          handleLocationError(false, infoWindow, map.getCenter());
        }
      }

      function handleLocationError(browserHasGeolocation, infoWindow, pos) {
        infoWindow.setPosition(pos);
        infoWindow.setContent(browserHasGeolocation ?
                              'Error: The Geolocation service failed.' :
                              'Error: Your browser doesn\'t support geolocation.');
        infoWindow.open(map);
      }
	  
    </script>
<form id="orderForm" name="orderForm" action="updateloc.php" method="POST" >
	<div class="actions">
	<input type="hidden" name="d1" value=""/>
	<input type="hidden" name="d2" value=""/>
	<input type="hidden" name="d3" value=""/>
	</form>

    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyABOJhKC77F0VmiJfTIe-qM_igCzj3MBhw&callback=initMap">
    </script>

								</th>
								<th>
								</th>
							</tr>
						</table>
					</div>
				
			</div>
</div>			
  </body>
</html>