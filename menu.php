<!DOCTYPE html>
<html lang="en" >
<head>
 <!-- <meta charset="UTF-8">
  <title>Delicious Shopping Cart</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">

  <link rel='stylesheet prefetch' href='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/themes/smoothness/jquery-ui.css'> -->
  <link rel="shortcut icon" href="img/24331072_10210822288896431_583442997_n.png">	
	
		<title>The Danish Coffee Shop</title>
 <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
	<!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">
      <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @charset "UTF-8";
@import url(https://fonts.googleapis.com/css?family=Mouse+Memoirs:400,700);
* {
  box-sizing: border-box;
}


.html, body {
  font: 16px "Mouse Memoirs";
  background: ;
  color: #523118;
  width: 100%;
  height: 100%;
}

.header {
  text-align: center;
  padding: 1em 0 2em;
  background-image:;
  color: #f0dccd;
  box-shadow: 0 0 0 0.5em rgba(255, 255, 255, 0.25) inset;
}
.header h1 {
  font-size: 10em;
}
.header p {
  font-size: 1.2em;
  font-style: italic;
}

.cart-container {
  width: 100%;
  height: 280px;
  display: table;
}
.cart-container .empty {
  font-size: 3em;
  width: 100%;
  text-align: center;
  display: table-cell;
  vertical-align: middle;
}


.cart .product {
  position: relative;
  width: 200px;
  height: 280px;
  float: left;
}
.cart .product:hover {
  z-index: 1;
}
.cart .product:nth-child(3n+1) .product-preview, .cart .product:nth-child(3n+1) .product-interactions {
  background: rgba(255, 255, 255, 0.65);
}
.cart .product:nth-child(3n+2) .product-preview, .cart .product:nth-child(3n+2) .product-interactions {
  background: rgba(255, 255, 255, 0.65);
}
.cart .product:nth-child(3n) .product-preview, .cart .product:nth-child(3n) .product-interactions {
  background: rgba(255, 255, 255, 0.65);
}
.cart .product .product-preview {
  padding: 1em;
  height: 280px;
  position: relative;
}
.cart .product .product-preview .thumbnail {
  width: 100%;
  min-height: 120px;
  max-height: 200px;
}
.cart .product .product-preview .thumbnail .image {
  width: 100%;
  margin-top: 1em;
}
.cart .product .product-preview .product-paper {
  position: absolute;
  height: 75px;
  bottom: 0;
  background: rgba(255, 255, 255, 0.65);
  padding: 1em;
  display: block;
  width: 100%;
  margin-left: -1em;
}
.cart .product .product-preview .product-name {
  font-size: 1.1em;
  text-align: center;
}
.cart .product .product-preview .product-price {
  text-align: center;
  font-size: 1.2em;
}
.cart .product .product-quantity {
  font-size: 2em;
  width: 2em;
  height: 2em;
  text-align: center;
  padding: 0.35em 0;
  border-radius: 1em;
  position: absolute;
  top: 0.5em;
  right: 0.5em;
  background: #fff;
  transform: rotateZ(10deg);
  backface-visibility: hidden;
}
.cart .product:hover .product-interactions, .cart .product .visible {
  opacity: 1 !important;
  transform: perspective(600px) rotateX(0deg) !important;
}
.cart .product .product-interactions {
  position: absolute;
  bottom: 75px;
  width: 100%;
  height: 60px;
  border-bottom: 1px dashed rgba(0, 0, 0, 0.4);
  transform-origin: 50% 100% 0;
  transform: perspective(600px) rotateX(90deg);
  opacity: 0;
  transition: 0.4s all ease-in-out;
  display: table;
}
.cart .product .product-interactions .button {
  width: 32%;
  height: 60px;
  float: left;
  text-align: center;
  font-size: 5em;
  line-height: 0.75em;
  color: #999;
  background: rgba(255, 255, 255, 0.65);
  cursor: pointer;
  user-select: none;
  transition: 0.1s all ease-in-out;
  transform-origin: 50% 0 0;
  transform: perspective(600px);
  z-index: 0;
  position: relative;
  display: table-cell;
  vertical-align: middle;
}
.cart .product .product-interactions .button.plus {
  color: #7fb034;
}
.cart .product .product-interactions .button.minus {
   left: 32%;
  color: #a0ce5a;
}
.cart .product .product-interactions .button:nth-child(1), .cart .product .product-interactions .button:nth-child(2) {
  border-right: 1px dashed rgba(0, 0, 0, 0.1);
}
.cart .product .product-interactions .button:nth-child(2) {
  width: 36%;
}
.cart .product .product-interactions .button:active {
  font-size: 7em;
  background: #fff !important;
  box-shadow: 0 0 0 10px #fff !important;
  z-index: 10;
  line-height: 0.45em;
}
.cart .product .product-interactions .button:hover {
  background: rgba(255, 255, 255, 0.5);
}

.bill {
  margin: 0;
  padding: 1em;
  font-size: 1.4em;
  line-height: 1.6em;
  background: #F1D5A5;
  color: #48320b;
  width: 100%;
}
.bill .total {
  font-weight: bold;
  font-size: 1.6em;
}
.bill tr td {
  width: 50%;
  padding: 0.25em 20px;
}
.bill tr .label {
  text-align: right;
}

.actions {
  text-align: center;
  position: relative;
  width: 100%;
  height: 6em;
}
.actions .big-button {
  position: left;
  cursor: pointer;
  user-select: none;
  padding: 1em;
  width: 100%;
  font-size: 1.5em;
  transition: 0.1s all ease-in-out;
  box-shadow: 0 0 0 0 #6c411f;
}
.actions .big-button:active {
  z-index: 10;
  font-size: 2em;
}
.actions .big-button.return {
  background: #ad6932;
  color: #f0dccd;
}
.actions .big-button.return:hover {
  background: #6c411f;
}
.actions .big-button.return:before {
  content: "←";
}
.actions .big-button.go {
  background: #a0ce5a;
  color: #334715;
  font-size: 2em;
}
.actions .big-button.go:hover {
  background: #7fb034;
}
.actions .big-button.go:active {
  font-size: 2.5em;
  background: #bede8e;
  box-shadow: 0 0 0 10px #bede8e;
}

    </style>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>

</head>

<body>
 <div class="">
   <div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">MENU</div>
</div>

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
 <br></br>
 
 
<div class="container">
  <div class="empty" style="display:none">
    No more twinkies ! 
  </div>
  <ul class="cart" >
  
    <li class="product" data-price="1.50" data-quantity="0">
      <div class="product-preview">
        <div class="thumbnail">
          <img class="image" src="img/ellinikos.jpg" />
        </div>
        <div class="product-paper">
          <div class="product-name">
            Greek Coffee € 1.50
          </div>
          <div class="product-price">
            € 0.00
          </div>
        </div>
      </div>
      <div class="product-quantity">
        x0
      </div>
      <div class="product-interactions">
        <div class="button plus" onClick="ellinikos1()">
          +
        </div>
        <div class="button minus" onClick="ellinikos2()">
          -
        </div>
      </div>
    </li>
	
    <li class="product" data-price="2.2" data-quantity="0">
      <div class="product-preview">
        <div class="thumbnail">
          <img class="image" src="img/frappe.jpg" />
        </div>
        <div class="product-paper">
          <div class="product-name">
            Frape € 2.20
          </div>
          <div class="product-price">
            € 0.00
          </div>
        </div>
      </div>
      <div class="product-quantity">
        x0
      </div>
      <div class="product-interactions">
        <div class="button plus" onClick="frape1()">
          +
        </div>
        <div class="button minus" onClick="frape2()">
          -
        </div>
      </div>
    </li>
    <li class="product" data-price="2.2" data-quantity="0">
      <div class="product-preview">
        <div class="thumbnail">
          <img class="image" src="img/espresso.jpg" />
        </div>
        <div class="product-paper">
          <div class="product-name">
           Espresso € 2.20
          </div>
          <div class="product-price">
            € 0.00
          </div>
        </div>
      </div>
      <div class="product-quantity">
        x0
      </div>
      <div class="product-interactions">
        <div class="button plus" onClick="espresso1()">
          +
        </div>
        <div class="button minus" onClick="espresso2()">
          -
        </div>
	  </div>
    </li>
	
	<li class="product" data-price="2.5" data-quantity="0">
      <div class="product-preview">
        <div class="thumbnail">
          <img class="image" src="img/cappuccino.jpg" />
        </div>
        <div class="product-paper">
          <div class="product-name">
            Cappuccino € 2.50
          </div>
          <div class="product-price">
            € 0.00
          </div>
        </div>
      </div>
      <div class="product-quantity">
        x0
      </div>
      <div class="product-interactions">
        <div class="button plus" onClick="cappuccino1()">
          +
        </div>
        <div class="button minus" onClick="cappuccino2()">
          -
        </div>
      </div>
    </li>
    <li class="product" data-price="1.5" data-quantity="0">
      <div class="product-preview">
        <div class="thumbnail">
          <img class="image" src="img/filter.jpg" />
        </div>
        <div class="product-paper">
          <div class="product-name">
            Filter Coffee € 1.50
          </div>
          <div class="product-price">
            € 0.00
          </div>
        </div>
      </div>
      <div class="product-quantity">
        x0
      </div>
      <div class="product-interactions">
        <div class="button plus" onClick="filtercoffee1()">
          +
        </div>
        <div class="button minus" onClick="filtercoffee2()">
          -
        </div>
      </div>
    </li>
	</ul>
	<ul class="cart">
    <li class="product" data-price="2.0" data-quantity="0">
      <div class="product-preview">
        <div class="thumbnail">
          <img class="image" src="img/tiropita.jpg" />
        </div>
        <div class="product-paper">
          <div class="product-name">
            Cheese-Pie € 2.00
          </div>
          <div class="product-price">
            € 0.00
          </div>
        </div>
      </div>
      <div class="product-quantity">
        x0
      </div>
      <div class="product-interactions">
        <div class="button plus" onClick="tiropita1()">
          +
        </div>
        <div class="button minus" onClick="tiropita2()">
          -
        </div>
	  </div>
    </li>
    <li class="product" data-price="1.5" data-quantity="0">
      <div class="product-preview">
        <div class="thumbnail">
          <img class="image" src="img/koulouri.jpg" />
        </div>
        <div class="product-paper">
          <div class="product-name">
            Bagel € 1.50
          </div>
          <div class="product-price">
            € 0.00
          </div>
        </div>
      </div>
      <div class="product-quantity">
        x0
      </div>
      <div class="product-interactions">
        <div class="button plus" onClick="koulouri1()">
          +
        </div>
        <div class="button minus" onClick="koulouri2()">
          -
        </div>
      </div>
    </li>
    <li class="product" data-price="2.5" data-quantity="0">
      <div class="product-preview">
        <div class="thumbnail">
          <img class="image" src="img/tost.jpg" />
        </div>
        <div class="product-paper">
          <div class="product-name">
            Tost € 2.50
          </div>
          <div class="product-price">
            € 0.00
          </div>
        </div>
      </div>
      <div class="product-quantity">
        x0
      </div>
      <div class="product-interactions">
        <div class="button plus" onClick="tost1()">
          +
        </div>
        <div class="button minus" onClick="tost2()">
          -
        </div>
      </div>
    </li>
    <li class="product" data-price="3.0" data-quantity="0">
      <div class="product-preview">
        <div class="thumbnail">
          <img class="image" src="img/cake.jpg" />
        </div>
        <div class="product-paper">
          <div class="product-name">
            Cake € 3.00
          </div>
          <div class="product-price">
            € 0.00
          </div>
        </div>
      </div>
      <div class="product-quantity">
        x0
      </div>
      <div class="product-interactions">
        <div class="button plus" onClick="cake1()">
          +
        </div>
        <div class="button minus" onClick="cake2()">
          -
        </div>
      </div>
    </li>
    <li class="product" data-price="2.5" data-quantity="0">
      <div class="product-preview">
        <div class="thumbnail">
          <img class="image" src="img/xortopita.jpg" />
        </div>
        <div class="product-paper">
          <div class="product-name">
            Green-Pie € 2.50
          </div>
          <div class="product-price">
            € 0.00
          </div>
        </div>
      </div>
      <div class="product-quantity">
        x0
      </div>
      <div class="product-interactions">
        <div class="button plus" onClick="xortopita1()">
          +
        </div>
        <div class="button minus" onClick="xortopita2()">
          -
        </div>
      </div>
    </li>
  </ul>
</div>
<table class="bill">
  <tr class="total">
    <td class="label">
      Total :
    </td>
    <td class="value">
      € 0.00
    </td>
  </tr>
</table>
<form id="orderForm" name="orderForm" action="isagogi-diefthinsis.php" method="POST" >
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
	
	<input type="hidden" name="total" value=""/>
	
	  <button class="big-button go" onclick="setValues();">
			Order
	  </button>
  
</div>

<script>



	function setValues(){
		document.orderForm.ellinikos.value = ellinikos;
		document.orderForm.frape.value = frape;
		document.orderForm.espresso.value =espresso;
		document.orderForm.cappuccino.value = cappuccino;
		document.orderForm.filtercoffee.value = filtercoffee;
		
		document.orderForm.tiropita.value = tiropita;
		document.orderForm.koulouri.value = koulouri;
		document.orderForm.tost.value = tost;
		document.orderForm.cake.value = cake;
		document.orderForm.xortopita.value = xortopita;
		document.orderForm.total.value = total;
		
		document.forms["orderForm"].submit();
	}
	
var ellinikos = 0;
    function ellinikos1() {
        ellinikos += 1;
        document.getElementById("ellinikos").innerHTML = ellinikos;
		
    };
		
	function ellinikos2() {
        ellinikos -=1;
		if (ellinikos < 0 ) 
		{
			ellinikos = 0 ;
		}
				 document.getElementById("ellinikos").innerHTML = ellinikos;
    };

	var frape = 0;
    function frape1() {
        frape += 1;
        document.getElementById("frape").innerHTML = frape;
    };
		
	function frape2() {
        frape -=1;
		if (frape < 0 ) 
		{
			frape = 0 ;
		}
				 document.getElementById("frape").innerHTML = frape;
    };
	
	var espresso = 0;
    function espresso1() {
        espresso += 1;
        document.getElementById("espresso").innerHTML = espresso;
    };
		
	function espresso2() {
        espresso -=1;
		if (espresso < 0 ) 
		{
			espresso = 0 ;
		}
				 document.getElementById("espresso").innerHTML = espresso;
    };
	
	var cappuccino = 0;
    function cappuccino1() {
        cappuccino += 1;
        document.getElementById("cappuccino").innerHTML = cappuccino;
    };
		
	function cappuccino2() {
        cappuccino -=1;
		if (cappuccino < 0 ) 
		{
			cappuccino = 0 ;
		}
				 document.getElementById("cappuccino").innerHTML = cappuccino;
    };
	
	var filtercoffee = 0;
    function filtercoffee1() {
        filtercoffee += 1;
        document.getElementById("filtercoffee").innerHTML = filtercoffee;
    };
		
	function filtercoffee2() {
        filtercoffee -=1;
		if (filtercoffee < 0 ) 
		{
			filtercoffee = 0 ;
		}
				 document.getElementById("filtercoffee").innerHTML = filtercoffee;
    };
	
	var tiropita = 0;
    function tiropita1() {
        tiropita += 1;
        document.getElementById("tiropita").innerHTML = tiropita;
    };
		
	function tiropita2() {
        tiropita -=1;
		if (tiropita < 0 ) 
		{
			tiropita = 0 ;
		}
				 document.getElementById("tiropita").innerHTML = tiropita;
    };
	

	var koulouri = 0;
    function koulouri1() {
        koulouri += 1;
        document.getElementById("koulouri").innerHTML = koulouri;
    };
		
	function koulouri2() {
        koulouri -=1;
		if (koulouri < 0 ) 
		{
			koulouri = 0 ;
		}
				 document.getElementById("koulouri").innerHTML = koulouri;
    };

	var tost = 0;
    function tost1() {
        tost += 1;
        document.getElementById("tost").innerHTML = tost;
    };
		
	function tost2() {
        tost -=1;
		if (tost < 0 ) 
		{
			tost = 0 ;
		}
				 document.getElementById("tost").innerHTML = tost;
    };
	
	var cake = 0;
    function cake1() {
        cake += 1;
        document.getElementById("cake").innerHTML = cake;
    };
		
	function cake2() {
        cake -=1;
		if (cake < 0 ) 
		{
			cake = 0 ;
		}
				 document.getElementById("cake").innerHTML = cake;
    };
	

	var xortopita = 0;
    function xortopita1() {
        xortopita += 1;
        document.getElementById("xortopita").innerHTML = xortopita;
    };
		
	function xortopita2() {
        xortopita -=1;
		if (xortopita < 0 ) 
		{
			xortopita = 0 ;
		}
				 document.getElementById("xortopita").innerHTML = xortopita;
    };
	
	</script>
</form>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='http://ajax.googleapis.com/ajax/libs/jqueryui/1.11.2/jquery-ui.min.js'></script>
<script type="text/javascript" src="http://jqueryjs.googlecode.com/files/jquery-1.3.2.js"></script>
    <script  src="js/index1.js"></script>

</body>
</html>
