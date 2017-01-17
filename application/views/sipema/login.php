<!DOCTYPE html>
<html lang="es">
	
<head>
		<meta charset="utf-8">
		<title></title>
		<meta name="description" content="Your description">
		<meta name="keywords" content="Your,Keywords">
		<meta name="author" content="ResponsiveWebInc">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<!-- Styles -->
		<!-- Bootstrap CSS -->
		<link href="<?php echo site_url('assets/dist/css/bootstrap.min.css') ?>" rel="stylesheet">
		<!-- SLIDER REVOLUTION 4.x CSS SETTINGS -->
		<link rel="stylesheet" href="<?php echo site_url('assets/build/css/settings.css')?>" media="screen" />
		<!-- Pretty Photo CSS -->
		<link href="<?php echo site_url('assets/build/css/prettyPhoto.css')?>" rel="stylesheet">
		<!-- Parallax slider -->
		<link rel="stylesheet" href="<?php echo site_url('assets/build/css/slider.css')?>">
		<!-- Flexslider -->
		<link rel="stylesheet" href="<?php echo site_url('assets/build/css/flexslider.css')?>">
		<!-- Font awesome CSS 	
		<link href="<?php echo site_url('assets/build/css/font-awesome.min.css')?>" rel="stylesheet">	-->
		<!-- Custom CSS -->
		<link href="<?php echo site_url('assets/build/css/style.css')?>" rel="stylesheet">
		<!-- Colors - Orange, Purple, Light Blue (lblue), Red, Green and Blue -->
		<link href="<?php echo site_url('assets/build/css/lblue.css')?>" rel="stylesheet">
		
	</head>
	
	<body>

		<!-- Header Starts -->
		<header>
		  <div class="container">
			<div class="row">
			  <div class="col-md-12 col-sm-12">
				<div class="logo">
					<div class="row">
					<div class="col-md-4"><img src="<?php echo site_url('public/images/hidalgocrececontigo.png') ?>" class="img-responsive"></div>
					<div class="col-md-4"><img src="<?php echo site_url('public/images/hidalgo_logo.png') ?>" class="img-responsive"></div>
					<div class="col-md-4"><img src="<?php echo site_url() ?>" class="img-responsive"></div>
					</div>
					<!-- <h1><a href="#">Metro <span class="color">Mania</span></a></h1>
				  <div class="hmeta">Responsive Metro Styled Theme</div> -->
				</div>
			  </div>
			</div>
		  </div>
		</header>

		<!-- Navigation bar starts -->

		<div class="navbar bs-docs-nav" role="banner">
		  <div class="container">
		   <div class="navbar-header">
			 <button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
				 <span class="sr-only">Toggle navigation</span>
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
				 <span class="icon-bar"></span>
			 </button>
		   </div>
		   
			  <nav class="collapse navbar-collapse bs-navbar-collapse" role="navigation">
				<ul class="nav navbar-nav">
					<li><a href="#" >Inicio</a></li> 
					<li><a href="#" >Pases de salida</a></li> 
					<li><a href="#" >Contrarecivos</a></li> 
					<li><a href="#" >Inventarios</a></li> 
					<li><a href="#" >Correspondencia</a></li> 
					<li><a href="#" >SIPEMA</a></li>
				  
				</ul>
			  </nav>
			 </div>
		  </div>

		<!-- Navigation bar ends -->
	<section class="container ">
		
		<form class="form-signin">
        <h2 class="form-signin-heading">Please sign in</h2>
        <label for="inputEmail" class="sr-only">Email address</label>
        <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required="" autofocus="">
        <label for="inputPassword" class="sr-only">Password</label>
        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required="">
        <div class="checkbox">
          <label>
            <input type="checkbox" value="remember-me"> Remember me
          </label>
        </div>
        <button class="btn btn-lg btn-primary btn-block" type="submit">Sign in</button>
      </form>
	</section>
		
				
		<!-- Javascript files -->
		<!-- jQuery -->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- Bootstrap JS -->
		<script src="<?php echo site_url('assets/dist/js/bootstrap.min.js') ?>"></script>
		
	</body>	
</html>