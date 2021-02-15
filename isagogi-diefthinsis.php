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

		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false&v=3&libraries=geometry"></script>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">

	   <title>Place Autocomplete</title>
    <style>
      /* Always set the map height explicitly to define the size of the div
       * element that contains the map. */
      #map {
        width: 50%;
		height: 70%;
		
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }
      #description {
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
      }

      #infowindow-content .title {
        font-weight: bold;
      }

      #infowindow-content {
        display: none;
      }

      #map #infowindow-content {
        display: inline;
      }

      .pac-card {
        margin: 10px 10px 0 0;
        border-radius: 2px 0 0 2px;
        box-sizing: border-box;
        -moz-box-sizing: border-box;
        outline: none;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
        background-color: #fff;
        font-family: Roboto;
      }

      #pac-container {
        padding-bottom: 6px;
        margin-right: 6px;
      }

      .pac-controls {
        display: inline-block;
        padding: 5px 11px;
      }

      .pac-controls label {
        font-family: Roboto;
        font-size: 13px;
        font-weight: 300;
      }

      #pac-input {
        background-color: #fff;
        font-family: Roboto;
        font-size: 15px;
        font-weight: 300;
        margin-left: 12px;
        padding: 0 11px 0 13px;
        text-overflow: ellipsis;
        width: 400px;
      }

      #pac-input:focus {
        border-color: #4d90fe;
      }

      #title {
        color: #fff;
        background-color: #4d90fe;
        font-size: 25px;
        font-weight: 500;
        padding: 6px 12px;
      }
    </style>
	
  </head>

  <body>

    <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Danish Coffe Shops</div>
    <div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Coffe| Snacks | Delivery</div>
	
	
	

<script>


	var lats = "38.2566976";
	var lons = "21.7412553";
	var latpg = "38.2468005";
	var lonpg = "21.7328295";
	var lato = "38.2494441";
	var lono = "21.7348441";
	var d1 = 0;
	var d2 = 0;
	var d3 = 0;
	var x = document.getElementById("latitude");
	var y = document.getElementById("longitude");
	
	var ellinikos = <?php echo $_POST['ellinikos']?>;
	var frape = <?php echo $_POST['frape']?>;
	var espresso = <?php echo $_POST['espresso']?>;
	var cappuccino = <?php echo $_POST['cappuccino']?>;
	var filtercoffee = <?php echo $_POST['filtercoffee']?>;
	
	var tiropita = <?php echo $_POST['tiropita']?>;
	var koulouri = <?php echo $_POST['koulouri']?>;
	var tost = <?php echo $_POST['tost']?>;
	var cake = <?php echo $_POST['cake']?>;
	var xortopita = <?php echo $_POST['xortopita']?>;
	
	
	
	
	function getLocation() 
	{
		
		if (navigator.geolocation)
		{
			navigator.geolocation.getCurrentPosition(showPosition);
		} 
		
	}

	function showPosition(position) 
	{
		
		var lat = position.coords.latitude;
		var lon = position.coords.longitude;
		getDistanceFromSofias(lat,lon,lats,lons)
		getDistanceFromOlgas(lat,lon,lato,lono)	
		getDistanceFromGeorgiou(lat,lon,latpg,lonpg)
		compare(d1,d2,d3);
		/*d1 = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(lat, lon), new google.maps.LatLng(lat1, lon1));       
		d2 = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(lat, lon), new google.maps.LatLng(lat2, lon2));
		d3 = google.maps.geometry.spherical.computeDistanceBetween(new google.maps.LatLng(lat, lon), new google.maps.LatLng(lat3, lon3));*/

		//getDistanceFromSofias(lat1,lon1,lat,lon);
		//getDistanceFromOlgas(lat2,lon2,lat,lon);
		//getDistanceFromGeorgiou(lat3,lon3,lat,lon);
		//alert (frape);
		//alert(d1);
		document.orderForm.d1.value = d1;
		document.orderForm.d2.value = d2;
		document.orderForm.d3.value = d3;
		
		document.orderForm.ellinikos.value = ellinikos;
		document.orderForm.frape.value = frape;
		document.orderForm.espresso.value = espresso;
		document.orderForm.cappuccino.value = cappuccino;
		document.orderForm.filtercoffee.value = filtercoffee;
		
		document.orderForm.tiropita.value = tiropita;
		document.orderForm.koulouri.value = koulouri;
		document.orderForm.tost.value = tost;
		document.orderForm.cake.value = cake;
		document.orderForm.xortopita.value = xortopita;
		
		
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
	
	
	function getDistanceFromOlgas(lat,lon,lato,lono)
	{
		var R = 6371; // Radius of the earth in km
		var dLat1 = deg2rad2(lat-lato);  // deg2rad below
		var dLon1 = deg2rad2(lon-lono); 
		var a1 = 
		Math.sin(dLat1/2) * Math.sin(dLat1/2) +
		Math.cos(deg2rad2(lat)) * Math.cos(deg2rad2(lato)) * 
		Math.sin(dLon1/2) * Math.sin(dLon1/2)
		;
		var c1 = 2 * Math.atan2(Math.sqrt(a1), Math.sqrt(1-a1)); 
		 d2 = R * c1; // Distance in km
		//alert(d2);	
		
		
		
	}

	function deg2rad2(deg2)
	{
		return deg2 * (Math.PI/180);
	}	
	
	
	function getDistanceFromGeorgiou(lat,lon,latpg,lonpg)
	{
		var R = 6371; // Radius of the earth in km
		var dLat1 = deg2rad3(lat-latpg);  // deg2rad below
		var dLon1 = deg2rad3(lon-lonpg); 
		var a1 = 
		Math.sin(dLat1/2) * Math.sin(dLat1/2) +
		Math.cos(deg2rad3(lat)) * Math.cos(deg2rad3(latpg)) * 
		Math.sin(dLon1/2) * Math.sin(dLon1/2)
		;
		var c1 = 2 * Math.atan2(Math.sqrt(a1), Math.sqrt(1-a1)); 
		 d3 = R * c1; // Distance in km
		//alert(d3);	
		
		
	}

	function deg2rad3(deg3)
	{
		return deg3 * (Math.PI/180);
	}
	
	function compare(d1,d2,d3)
	{
			//alert(d3);
		if (( d1 < d2 )&& (d1 < d3 ))
		{
			//alert ("sofias"+d1);
			document.orderForm.katastima.value = "agias sofias";
		}	
		if (( d2 < d1 )&& (d2 < d3 ))
		{
			document.orderForm.katastima.value = "platia olgas";
			//alert ("olgas"+d2);
		}	
		if (( d3 < d2 )&& (d3 < d1 ))
		{
			document.orderForm.katastima.value = "platia georgiou";
			//alert ("georgiou"+d3);
		}
			
		
		
	}

</script>


<!--</form>-->


    <!-- Navigation -->
		<nav class="navbar sticky-top navbar-expand-lg navbar-light bg-faded py-lg-2">
			<div class="container">
				<a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#!"></a>
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item active px-lg-4">
							<h5> <a class="nav-link text-uppercase text-expanded" href="log in.php">Log in & Sign up</a></h5>
						</li>
						<li class="nav-item px-lg-4">
							<h5> <a class="nav-link text-uppercase text-expanded" href="stores.html">Stores</a></h5>
						</li>
						<li class="nav-item px-lg-4">
							<h5> <a class="nav-link text-uppercase text-expanded" href="contact.html">Contact Us</a></h5>
						</li>
					</ul>
				</div>
			</div>
		</nav>

    <!--<div class="container">-->

     <button type="submit" name="submit" onclick="getLocation()">SEND</button>	
        
        
          
   
       <div class="pac-card" id="pac-card">
      
        
		
      <div>
        <div id="title">
          Παρακαλώ εισάγεται διεύθυνση
        </div>
		
        <div id="type-selector" class="pac-controls">
          <input type="radio" name="type" id="changetype-all" checked="checked">
          <label for="changetype-all">All</label>

          <input type="radio" name="type" id="changetype-establishment">
          <label for="changetype-establishment">Establishments</label>

          <input type="radio" name="type" id="changetype-address">
          <label for="changetype-address">Addresses</label>

          <input type="radio" name="type" id="changetype-geocode">
          <label for="changetype-geocode">Geocodes</label>
        </div>
        <div id="strict-bounds-selector" class="pac-controls">
          <input type="checkbox" id="use-strict-bounds" value="">
          <label for="use-strict-bounds">Strict Bounds</label>
        </div>
      </div>
      <div id="pac-container">
        <input id="pac-input" type="text"
            placeholder="Enter a location">
      </div>
    </div>
    <div id="map"></div>
    <div id="infowindow-content">
      <img src="" width="16" height="16" id="place-icon">
      <span id="place-name"  class="title"></span><br>
      <span id="place-address"></span>
    </div>
	
	<form id="orderForm" name="orderForm" action="new 3.php" method="POST" >
	<div class="actions">
	<input type="hidden" name="ellinikos" value=""/>
	<input type="hidden" name="frape" value=""/>
	<input type="hidden" name="espresso" value=""/>
	<input type="hidden" name="cappuccino" value=""/>
	<input type="hidden" name="filtercoffee" value=""/>
	
	<input type="hidden" name="tiropita" value=""/>
	<input type="hidden" name="koulouri" value=""/>
	<input type="hidden" name="tost" value=""/>
	<input type="hidden" name="cake" value=""/>
	<input type="hidden" name="xortopita" value=""/>
	
	<input type="hidden" name="d1" value=""/>
	<input type="hidden" name="d2" value=""/>
	<input type="hidden" name="d3" value=""/>
	
	<input type="hidden" name="katastima" value=""/>
	
	
  </form>
</div>


	

*******************************************************************************************
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
   <!-- <script>
      // This example requires the Places library. Include the libraries=places
      // parameter when you first load the API. For example:
      // <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_API_KEY&libraries=places">
		
		
		

      function initMap() {
        var map = new google.maps.Map(document.getElementById('map'), {
          center: {lat: 38.24963989118517, lng: 21.73826689473512},
          zoom: 13
		 // center: {lat: 59.325, lng: 18.070}
        });
        var card = document.getElementById('pac-card');
        var input = document.getElementById('pac-input');
        var types = document.getElementById('type-selector');
        var strictBounds = document.getElementById('strict-bounds-selector');
		
        map.controls[google.maps.ControlPosition.TOP_RIGHT].push(card);

        var autocomplete = new google.maps.places.Autocomplete(input);

        // Bind the map's bounds (viewport) property to the autocomplete object,
        // so that the autocomplete requests use the current map bounds for the
        // bounds option in the request.
        autocomplete.bindTo('bounds', map);

        var infowindow = new google.maps.InfoWindow();
        var infowindowContent = document.getElementById('infowindow-content');
        infowindow.setContent(infowindowContent);
        var marker = new google.maps.Marker({
          map: map,
          anchorPoint: new google.maps.Point(0, -29)
        });

        autocomplete.addListener('place_changed', function() {
          infowindow.close();
          marker.setVisible(false);
          var place = autocomplete.getPlace();
          if (!place.geometry) {
            // User entered the name of a Place that was not suggested and
            // pressed the Enter key, or the Place Details request failed.
            window.alert("No details available for input: '" + place.name + "'");
            return;
          }

          // If the place has a geometry, then present it on a map.
          if (place.geometry.viewport) {
            map.fitBounds(place.geometry.viewport);
          } else {
            map.setCenter(place.geometry.location);
            map.setZoom(17);  // Why 17? Because it looks good.
          }
          marker = new google.maps.Marker({
          map: map,
          draggable: true,
          animation: google.maps.Animation.DROP,
          position: {lat: 59.327, lng: 18.067}
        });
        marker.setPosition(place.geometry.location);
		marker.setVisible(true);
		marker.addListener('click', toggleBounce);
		

          var address = '';
          if (place.address_components) {
            address = [
              (place.address_components[0] && place.address_components[0].short_name || ''),
              (place.address_components[1] && place.address_components[1].short_name || ''),
              (place.address_components[2] && place.address_components[2].short_name || '')
            ].join(' ');
          }

          infowindowContent.children['place-icon'].src = place.icon;
          infowindowContent.children['place-name'].textContent = place.name;
          infowindowContent.children['place-address'].textContent = address;
          infowindow.open(map, marker);
        });

        // Sets a listener on a radio button to change the filter type on Places
        // Autocomplete.
        function setupClickListener(id, types) {
          var radioButton = document.getElementById(id);
          radioButton.addEventListener('click', function() {
            autocomplete.setTypes(types);
          });
        }

        setupClickListener('changetype-all', []);
        setupClickListener('changetype-address', ['address']);
        setupClickListener('changetype-establishment', ['establishment']);
        setupClickListener('changetype-geocode', ['geocode']);

        document.getElementById('use-strict-bounds')
            .addEventListener('click', function() {
              console.log('Checkbox clicked! New state=' + this.checked);
              autocomplete.setOptions({strictBounds: this.checked});
            });
      }
	  function toggleBounce() {
        if (marker.getAnimation() !== null) {
          marker.setAnimation(null);
        } else {
          marker.setAnimation(google.maps.Animation.BOUNCE);
        }
      }
	  console.log(navigator.geolocation.getCurrentPosition())

 </script>-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdUsIIVHrzWS-FQMvaG4OKxgz86_28Li8&libraries=places&callback=initMap"
        async defer></script>
	

  </body>

</html>
