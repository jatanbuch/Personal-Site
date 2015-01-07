<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jay Buch | Contact</title>
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
					<a href="portfolio.php" class="col-xs-12 col-md-4" id="portfolio">Portfolio</a>
					<a href="contact.php" id="contact" class="col-xs-12 col-md-4 selected">Contact</a>
			</nav>
		
		<a href="#"><button type="button" id="top_button"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span><br />Top</button></a>
	</header>

	<section class="contact">
		<h1 id="contact_details">Contact Details</h1>
		<p id="details"></p>

			<p class="phone"><a href="tel:609-321-2455" id="phone_image"><span class="glyphicon glyphicon-phone-alt" aria-hidden="true"></span>  609-321-2455</a></p>
			<p class="mail"><a href="mailto:buch.jatan@yahoo.com" id="mail_image"><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>  BUCH.JATAN@YAHOO.COM</a></p>
			<p class="twitter"><a href="http://twitter.com/intent/tweet?screen_name=Buch_Jay" id="twitter_image">twitter : @Buch_Jay</a></p>
			<p class="linkedin"><a href="http://www.linkedin.com/in/jatanbuch" id="linkedin_image">  in : Jatan Buch</a></p>
	</section>
	<?php require("footer.php");?>
	</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/portfolio.js"></script>
</body>
<!--</div>-->
</html>