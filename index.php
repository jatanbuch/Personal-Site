<!DOCTYPE html>
<html lang="en">
<head>
	<title>Jay Buch | Profile</title>
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
					
					<a href="index.php" class="col-xs-12 col-md-4 selected" id="resume">Profile</a>
					<a href="portfolio.php" class="col-xs-12 col-md-4" id="portfolio">Portfolio</a>
					<a href="contact.php" class="col-xs-12 col-md-4" id="contact">Contact</a>
			</nav>
		
		<a href="#"><button type="button" id="top_button"><span class="glyphicon glyphicon-chevron-up" aria-hidden="true"></span><br />Top</button></a>
	</header>

	<section class="resume">
		<h1 id="resume">Profile</h1>

		<nav id="resume_links">	<!--use jquery to make these links clickable to take them to their areas on the resume-->
			<a href="#skills" class="skills" class="selected">Skills</a>
			<a href="#education" class="education">Education</a>
			<a href="#experience" class="experience">Experience</a>
			<!--<a class="skills"><p href="#">Skills</p></a>
			<a class="education"><p href="#">Education</p></a>
			<a class="experience"><p href="#">Experience</p></a>-->
		</nav>

		<h2 id="skills">Skills</h2>
		<p>HTML5, CSS3, Javascript, jQuery, PHP, MySQL, Sales, Management, Communication Skills</p>
		
		
		<h2 id="education">Education</h2>
		<label>NYU School of Professional Studies</label><br />
		<span>Web Development Intensive</span><br />
		<label>Temple University - Fox School of Business and Management</label><br />
		<span>Bachelors of Business Administration</span>
		


		<h2 id="experience">Experience</h2>
		<div id="hover_over_position"></div>
		<h3 id="am_position" data-toggle="tooltip" title="Click for Reference">Assistant Branch Manager</h3>
			<div id="references">
				<div id="reference1">
					<a href="name: Yamille Rodriguez">Reference: Yamille Rodriguez |</a>
					<a href="tel:856-986-9950">Phone |</a>
					<a href="mailto: yrodriguez@thebeneficial.com">Email</a>
				</div>
			</div>
		<p>Perform variance analysis and adjust strategic initiatives to respnd to developing trends. Develop and execute strategies to co-manage the overall operations (production, service, HR, compliance and administrative duties) of a $25mm+ branch and support clients with accounts averaging $85k.</p><br />

			<label class="accomplishments1" id="selected">Accomplishments</label>
				<div id="accomplishments1">
					<p>Independently secured 60% of the annual goal within the first six months of employment.</p>
					<p>Significantly decreased cost per transaction by modeling behaviors that perform above expected standards of service.</p>
					<p>Conduct credit analysis to assist borrowers with transaction evaluation, which involved performing effective due deligence and structuring debt products that offer the best value with minimal cost impact.</p>
					<p>Leverage leading edge technology to evaluate key performance indicators that identify, create and execute innovative programs that ensure strategic growth and increased revenue.</p>
					<p>Create programs that invigorate production levels throughout the branch; host events with local establishments to enhance branch awareness and attract new business opportunities.</p><br />
				</div>
			

		<h3 id="csr_position">Customer Service Representative</h3>
			<div id="references">
				<div id="reference2">
					<a href="name: Linda Brown">Reference: Linda Brown |</a> 
					<a href="tel:609-387-1150" id="phone">Phone |</a>
					<a href="mailto: lbrown2@thebeneficial.com" id="email">Email</a>
				</div>
			</div>
		<p>Advised clients on a suite of lending products by analyzing financial statements; provided exemplary service while presenting "out of the box" solutions during the economic crisis. Conducted due deligence regarding diverse and broad range of financial scenarios. Analyzed credit reports and other metrics to successfully prepare, negotiate and process financial data.</p><br />

			<label class="accomplishments2" id="selected">Accomplishments</label>
				<div id="accomplishments2">
					<p>Steered clients to make good, strategic decisions based on current market trends and other key factors; greatly increased profitability and improved customer retention rates. Appointed by the Market Director to create and implement a plan to boost branch sales.</p>
					<p>Researched, proposed and executed strategy to boost interdepartmental business referrals; expanded business opportunities approximately 180% and increased net deposits $3.2mm over two years.</p>
				</div>
			</p>
	</section>

	<?php require("footer.php");?>

<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="js/portfolio.js"></script>
<!--<script type="text/javascript" src="js/resume_slidedown.js"></script>-->
</body>
</div>
<!--</div>-->
</html>