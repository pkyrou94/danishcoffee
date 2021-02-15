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
		
	<p>Click the button to get your coordinates.</p>

<!--<button type="submit" name="submit" onclick="getLocation()">Try It</button>-->

						<p id="latitude"></p>
						<p id="longitude"></p>

<script>
getLocation();
var lats = "38.2566976";
var lons = "21.7412553";
var lato = "38.2468005";
var lono = "21.7328295";
var latpg = "38.2494441";
var lonpg = "21.7348441";
var d1 = 0;
var d2 = 0;
var d3 = 0;
var x = document.getElementById("latitude");
var y = document.getElementById("longitude");

function getLocation() {
    if (navigator.geolocation) {
		
        navigator.geolocation.getCurrentPosition(showPosition);
		
    }
}

	function showPosition(position) 
	{
		
		var lat = position.coords.latitude;
		var lon = position.coords.longitude;
		getDistanceFromSofias(lat,lon,lats,lons)
		getDistanceFromGeorgiou(lat,lon,latpg,lonpg)
		getDistanceFromOlgas(lat,lon,lato,lono)
		
		document.orderForm.d1.value = d1;
		document.orderForm.d2.value = d2;
		document.orderForm.d3.value = d3;
		document.forms["orderForm"].submit();
	}
	function getDistanceFromSofias(lat,lon,lats,lons)
	{
		var R = 6371; // Radius of the earth in km
		var dLat1 = deg2rad1(lat-lats);  // deg2rad below
		var dLon1 = deg2rad1(lon-lons); 
		var a1 = 
		Math.sin(dLat1/2) * Math.sin(dLat1/2) +
		Math.cos(deg2rad1(lat)) * Math.cos(deg2rad1(lats)) * 
		Math.sin(dLon1/2) * Math.sin(dLon1/2)
		;
		var c1 = 2 * Math.atan2(Math.sqrt(a1), Math.sqrt(1-a1)); 
		 d1 = R * c1; // Distance in km
		//alert(d1);	
		
	}

	function deg2rad1(deg1)
	{
		return deg1 * (Math.PI/180);
	}
	
	function getDistanceFromGeorgiou(lat,lon,latpg,lonpg)
	{
		var R = 6371; // Radius of the earth in km
		var dLat1 = deg2rad2(lat-latpg);  // deg2rad below
		var dLon1 = deg2rad2(lon-lonpg); 
		var a1 = 
		Math.sin(dLat1/2) * Math.sin(dLat1/2) +
		Math.cos(deg2rad2(lat)) * Math.cos(deg2rad2(latpg)) * 
		Math.sin(dLon1/2) * Math.sin(dLon1/2)
		;
		var c1 = 2 * Math.atan2(Math.sqrt(a1), Math.sqrt(1-a1)); 
		 d2 = R * c1; // Distance in km
		//alert(d2);	
		
	}

	function deg2rad2(deg1)
	{
		return deg1 * (Math.PI/180);
	}
	
	function getDistanceFromOlgas(lat,lon,latpo,lonpo)
	{
		var R = 6371; // Radius of the earth in km
		var dLat1 = deg2rad3(lat-latpo);  // deg2rad below
		var dLon1 = deg2rad3(lon-lonpo); 
		var a1 = 
		Math.sin(dLat1/2) * Math.sin(dLat1/2) +
		Math.cos(deg2rad3(lat)) * Math.cos(deg2rad3(latpo)) * 
		Math.sin(dLon1/2) * Math.sin(dLon1/2)
		;
		var c1 = 2 * Math.atan2(Math.sqrt(a1), Math.sqrt(1-a1)); 
		 d3 = R * c1; // Distance in km
		//alert(d3);	
		
	}

	function deg2rad3(deg1)
	{
		return deg1 * (Math.PI/180);
	}
	
</script>


<div class="container">
  <div class="row">
    <div class="col-sm-6">
	<div class="bg-faded p-2 my-4" style="width: 100%; height: 250%;">
      <div id="map" style="container"></div>
	  </div>
    </div>
    <div class="col-sm-6">
      <div class="bg-faded p-2 my-4">
	 <h1> <div id="counter"></div> </h1>
	<h1> <div id="total"></div> </h1>
	<h1> <div id="total1"></div> </h1>
	<p id="demo"></p>
	<form action="accept.php" method="POST">
<button type="button" class="btn btn-info">Order Accepted</button>
</form>
<button type="button" class="btn btn-secondary">Order Denied</button>

<form action="log out.php" method="POST">
<input type="hidden" name="Username" value="">

<button id="log out"type="submit" class="btn btn-warning">Log out</button>
</form>


</div>
    </div>
    
  </div>
</div>
			

<script>
var seconds=0, minutes=0, hours=0;
var counter;
var stop,start;
var total;
var total1;

var counting = false;

window.onload = function () {
    counter = document.getElementById('counter');
	total = document.getElementById("total");
	
    stop = document.getElementById('log out');
	
    stop.onclick = function () {
        counting = false;
    }
    
                                   
    counting = true;
    timer();
}

function timer() {
    if (seconds >= 60) {
        minutes++;
        seconds = 0;
    }
    if (minutes >= 60) {
        hours++;
        minutes = 0;
    }
    /*if (minutes < 10) minutes = "0" + minutes;
    if (seconds < 10) seconds = "0" + seconds;
    if (hours < 10) hours = "0" + hours;*/
    counter.innerHTML = hours + ":" + minutes + ":" + seconds;
	total.innerHTML = hours + "." +minutes;
	
    if (counting) {
        seconds++;
        setTimeout(timer, 1000);
    }
}
</script>
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