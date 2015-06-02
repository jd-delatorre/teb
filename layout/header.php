<?php 
session_start();
?>

<!DOCTYPE html>
<!--[if IE 8]> 				 <html class="no-js lt-ie9" lang="en" > <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en" > <!--<![endif]-->

<head>
   <meta charset="utf-8" />
   <meta name="viewport" content="width=device-width" />
   <title>T.E.B.</title>
   <link rel="icon" type="image/ico" href="favicon.ico">
   <link rel="stylesheet" href="stylesheets/app.css" />
   <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
   <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false&libraries=places"></script>
   <script src="http://code.jquery.com/jquery-1.9.1.js"></script>   
   <script src="//cdn.jquerytools.org/1.2.6/full/jquery.tools.min.js"></script>
   <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  
   <link rel="stylesheet" href="stylesheets/main.css" />
   <script src="javascripts/vendor/custom.modernizr.js"></script>
   
   <script src="javascripts/range.js"></script>
	<script>
		$(function() {
			$( "#tabs" ).tabs();
			});
	</script>
	 <script>
		$(function() {
		$( "#radio" ).buttonset();
		});
	</script>
	
		 <script>
		$(function() {
		$( "#radiolayout" ).buttonset();
		});
	</script>
	
	

</head>
<body>

	<!-- Main header section with logo and navigation -->
	<div class="row topsection">
		<div class="large-4 columns">
			<a href="index.php"><img src="images/logo_background/logo.png" alt="TEB Logo"/></a>  <!-- Logo -->
		</div>
		<div class="large-4 columns logins"> 
					<a href="#" data-reveal-id="login">Log-in</a>&nbsp; |&nbsp; <a href="#">My Account</a> &nbsp;|&nbsp; <a href="#">Favorites</a>
		</div>
		<div class="large-4 columns padtop20">
			<form class="searchbox">
				<input type="text" placeholder="SEARCH THE SITE">  <!-- Search Bar --> 
			</form>
			<img class="searchicon" src="images/icons/searchicon.png"/>
		</div>
	</div>
	
	<div class="row">
		<div class="large-9 large-offset-3">
			<nav class="top-bar">
			  <ul class="title-area">
				<!-- Title Area -->
				<li class="name">
				</li>
				<!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
				<li class="toggle-topbar menu-icon black"><a href="#"><span>Menu</span></a></li>
			  </ul>

			  <section class="top-bar-section">
				   <!-- Right Nav Section -->
				<ul class="right">						<!-- Main Navigation -->
				  <li><a href="about.php">ABOUT</a></li>
				  <li><a href="search.php">SEARCH LISTINGS</a></li>
				  <li><a href="featured.php">FEATURED</a></li>
				  <li><a href="sellyourhome.php">SELL YOUR HOME</a></li>
				  <li><a href="press.php">PRESS</a></li>
				  <li><a href="contact.php">CONTACT</a></li>
				</ul>
			  </section>
			</nav>
		</div>
	</div>