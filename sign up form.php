<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Business Casual - Start Bootstrap Theme</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Josefin+Slab:100,300,400,600,700,100italic,300italic,400italic,600italic,700italic" rel="stylesheet" type="text/css">

    <!-- Custom styles for this template -->
    <link href="css/business-casual.css" rel="stylesheet">
</head>

<div class="tagline-upper text-center text-heading text-shadow text-white mt-5 d-none d-lg-block">Danish Coffee Shops</div>

    <!-- Navigation -->
   <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-faded py-lg-4">
      <div class="container">
        <a class="navbar-brand text-uppercase text-expanded font-weight-bold d-lg-none" href="#">Start Bootstrap</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav mx-auto">
            <li class="nav-item active px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="logn in.html">Log in or Sign up
                <span class="sr-only">(current)</span>
              </a>
          </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="stores.php">Stores</a>
            </li>
            <li class="nav-item px-lg-4">
              <a class="nav-link text-uppercase text-expanded" href="contact.html">Contact Us</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

<form action="insert.php" method="POST">
<body>
<div>

			<div class="form-group col-lg-4">
            <h5> <span class="badge badge-success">EMAIL</span></h5>
              <input type="text" name="email" class="form-control">
			
            </div>
			<div class="form-group col-lg-4">
               <h5> <span class="badge badge-success">PASSWORD</span></h5>
              <input type="text" name="pass" class="form-control">
			  <!--<h5> <span class="badge badge-success">Your password must contain at least 8 Characters </span></h5>-->
			 <h5> <span class="badge badge-secondary">Your password must contain at least 8 Characters and<br>Must contain at least 1 number</span></h5>
            </div>
			<div class="form-group col-lg-4">
              <h5> <span class="badge badge-success">TELEPHONE</span></h5>
              <input type="text" name="phone" class="form-control">
            </div>
			<button type="submit" name="submit" class="btn btn-outline-warning">
			submit
			</button>
</div>
<!--<div>
<font size=5>
<b>email :</b><input type="text" name="cemail"><br><br>
<b>pass :</b><input type="text" name="cpassword"><br><br>
<b>phone :</b><input type="text" name="cTelephone"><br><br>
<input type="submit" name="submit" value="add">
</font>
</div>-->
</body>
</html>