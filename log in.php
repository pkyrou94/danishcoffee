<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
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
		.div12{
			position:absolute;
				right: 150px;
				bottom: -450px;
		}
		.div1{
			position:absolute;
				right: 150px;
				bottom: -40px;
		}
		</style>
	</head>
	
	
	
	<body>
		<div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">The Danish Coffee Shops</div>
		<div class="tagline-lower text-center text-expanded text-shadow text-uppercase text-white mb-5 d-none d-lg-block">Coffee| Snacks | Delivery</div>
		
		<!-- Navigation -->
		<nav class="navbar-expand-lg navbar-light bg-faded py-lg-2">
			<div class="container">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse" id="navbarResponsive">
					<ul class="navbar-nav mx-auto">
						<li class="nav-item px-lg-4">
							<a class="nav-link text-uppercase text-expanded" href="stores.html">Stores</a>
						</li>
						<li class="nav-item px-lg-4">
							<a class="nav-link text-uppercase text-expanded" href="menu2.html">Menu</a>
						</li>
						<li class="nav-item px-lg-4">
							<a class="nav-link text-uppercase text-expanded" href="contact.html">Contact Us</a>
						</li>
					</ul>
				</div>
			</div>
		</nav>
		<div class="container">
			<div class="bg-faded p-4 my-4">
				<form action="compare.php" method="POST">
					<div class="row">
						<table class="table">
							<tr>
								<th>
									<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
										<ol class="carousel-indicators">
											<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
											<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
											<li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
										</ol>
										<div class="carousel-inner" role="listbox">
											<div class="carousel-item active">
												<img class="d-block img-fluid w-100" src="img/slide.jpg" alt="">
											</div>
											<div class="carousel-item">
												<img class="d-block img-fluid w-100" src="img/slide-.jpg" alt="">
											</div>
											<div class="carousel-item">
												<img class="d-block img-fluid w-100" src="img/slide--.jpg" alt="">
											</div>
										</div>
										<a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
											<span class="carousel-control-prev-icon" aria-hidden="true"></span>
											<span class="sr-only">Previous</span>
										</a>
										<a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
											<span class="carousel-control-next-icon" aria-hidden="true"></span>
											<span class="sr-only">Next</span>
										</a>
									</div>
								</th>
								<th>
									<hr class="divider">
										<h3 class="text-center text-lg text-uppercase my-0">Log In</h3>
									<hr class="divider">
									<div class="form-group col-lg-15">
										<label class="text-heading">Email</label>
										<input type="text" name="Username" class="form-control">
									</div>
									<div class="form-group col-lg-20">
										<label class="text-heading">Password</label>
										<input type="password" name="Password" class="form-control">
									</div>
									<button type="submit" name="submit" style="height:7%" class="btn btn-warning div1">Log in</button>
								</th>
							</tr>
						</table>
					</div>
				</form>
			</div>	
			<div class="bg-faded p-4 my-4">
				<hr class="divider">
					<h2 class="text-center text-lg text-uppercase my-0">Sing Up</h2>
				<hr class="divider">
				<form action="insert.php" method="POST">
					<div class="row">
						<div class="form-group col-lg-4">
							<label class="text-heading">Email</label>
							<input type="text" name="email" class="form-control">
						</div>	
						<div class="form-group col-lg-4">
							<label class="text-heading">Password</label>
							<input type="password" name="pass" class="form-control">		
							<label class="text-heading">Your password must contain at least 8 Characters and<br>Must contain at least 1 number</label>
						</div>
						<div class="form-group col-lg-4">
							<label class="text-heading">Telephone</label>
							<input type="text" name="phone" class="form-control">
						</div>
						<div>
							<button type="submit" name="submit" class="btn btn-warning div12">Submit</button>
						</div>
					</div>
				</form>
			</div>
		</div>

		<!-- Bootstrap core JavaScript -->
		<script src="vendor/jquery/jquery.min.js"></script>
		<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
	
	</body>

</html>
