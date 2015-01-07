<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jay Buch | Portfolio</title>
	<meta charset='utf-8' />
	<link rel="stylesheet" type="text/css" href="bootstrap/dist/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="css/portfolio.css" />
	<link rel="stylesheet" type="text/css" href="css/portfolio_responsive.css">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<div class="container-fluid">
<body>
	<!--<div id="body_shadow">-->
	<!--<img src="images/id_badge.jpg" id="badge_image"/>-->
	<!--<img src="images/newyork1.jpg" id="newyork1"/>-->
	<!--<img src="images/newyork2.jpg" id="newyork2"/>-->
	<!--<img src="images/lake1.jpg" id="lake1"/>-->
	<!--<img src="images/deskbackground.jpg" id="deskbackground"/>-->
	<!--<img src="images/brooklynbridge.jpg" id="brooklyn_bridge"/>-->
	<!--<img src="images/newyork4.jpg" id="newyork4"/>-->
	<img src="images/newyork.jpg" id="newyork"/>
	<!--<img src="images/ny.jpg" id="ny"/>-->
	

	<header class="header">
		<!--<img id="sourcecode" src="images/code1.jpg">-->
		<!--<img src="images/model_shirt.jpg" id="model_shirt">-->

		<!--<a href="index.php"><img src="images/jay_buch.jpg" id="my_image"></a>-->
		<a href="index.php"><img src="images/jb.jpg" id="my_image"></a>
		<a href="index.php" id="name"><h1>Jay Buch</h1></a>
		<a href="index.php" id="title"><h3>Developer</h3></a>

		<span class="glyphicon glyphicon-th" aria-hidden="true" id="menu"></span>
		
			<nav id="nav" class="row">
					<a href="index.php" class="col-xs-12 col-md-4" id="resume">Profile</a>
					<a href="portfolio.php" id="portfolio" class="col-xs-12 col-md-4 selected">Portfolio</a>
					<a href="contact.php" class="col-xs-12 col-md-4" id="contact">Contact</a>
			</nav>
		
		<a href="#"><button type="button" id="top_button"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span><br />Top</button></a>

		<!--<a href="#" id="top_button"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span><br />Top</a>-->
	</header>

	<section class="portfolio">
		<!-- <div class="row">
 	 		<div class="col-sm-2 col-md-4">
      			<a href="#"><img src="#" alt="Twitter Clone"></a>
    			
    			<div class="caption">
					<div class="thumbnail">	
					<h3 style="height: auto; width: auto;">Twitter Clone</h3>
					<p><a href="#" class="btn btn-primary" role="button" style="margin: 10px;">Site</a> <a href="#" class="btn btn-default" role="button">Code</a></p>
					</div>
				</div>
  			</div>
  			<div class="col-sm-2 col-md-4">
    			<a href="#"><img src="#" alt="Jay's Brewery Collection"></a>
    			<div class="caption">
    				<div class="thumbnail">
					<h3>Jay's Brewery Collection</h3>
					<p><a href="#" class="btn btn-primary" role="button" style="margin: 10px;">Site</a> <a href="#" class="btn btn-default" role="button">Code</a></p>
					</div>
				</div>
  			</div>
		</div> -->

			
			<div class="col-xs-12 col-md-6">
				
				<div class="twitter_clone">
					<div class="twitter_caption">
						<h4 style="color: black">Twitter Clone</h4>
						<p><a href="twitterclone/index.php" target="_new" class="btn btn-primary" role="button">Site</a> <a href="view-source:http://www.jaybuch.com/twitterclone/index.php" target="_new" class="btn btn-default" role="button">Code</a></p>
					</div>
					<a href="#"><img src="images/twitterclone_screenshot.jpg" id="twitter_project" /></a>
				</div>
			</div>
			
			
			
			<div class="col-xs-12 col-md-6">
				<div class="personal_site">
					<div class="personalsite_caption">
						<h4 style="color: black">Personal Website</h4>
						<p><a href="index.php" target="_new" class="btn btn-primary" role="button">Site</a> <a href="view-source:http://www.jaybuch.com/index.php" target="_new" class="btn btn-default" role="button">Code</a></p>
					</div>
					<a href="#"><img src="images/personal_site.jpg" id="personalsite_project" /></a>
				</div>
			</div>
			</div>
			
	</section>
	<?php require("footer.php");?>
	</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/portfolio.js"></script>
</body>
<!--</div>-->
</html>