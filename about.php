<?php

include 'config.php';
//starting the session to get the username and email for the user who is currently signed-in
session_start();
//if someone tries to access this page directly without log-in, they will be redirected on sign-in page
if(!isset($_SESSION['username'])){
	header("Location: signin.php");
}
//variable to track active nav link
$activeClass = 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>FlowDIY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" />
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/about.css" />



</head>
<body>
<div id="header">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">

		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="home.php"><img src="brand.png" style="height:100%;display:inline-block;"></a>
		</div>


		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li><a href="home.php">Home <span class="sr-only">(current)</span></a></li>
			<li><a href="market.php">Market Place</a></li>
			<li><a href="help.php">Help</a></li>
			<li class="active" ><a href="about.php">About</a></li>
		  </ul>
		  <form class="navbar-form navbar-right">
			<div class="form-group">
			  <p class="text-primary">Welcome<br/> <?php echo $_SESSION['username'];?></p>
			</div>

			<a href="signout.php" class="btn btn-primary navbar-btn">Sign Out</a>
		  </form>

		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</div>

<div id="aboutus" class="container-fluid">
	<h1>Meet Our Team</h1>
	<hr>
	<br/>
	<p id="aboutflow">True leaders, guide organizations to new heights by helping others to see the future through their eyes. Smart leaders, like you know when they need to hire the right people and bring in the right resources to succeed. If you are looking to change the status quo in accounting and make a positive impact on Canadian businesses, we want to hear from you. When you work with Flow you will benefit from our unique approach to customer success and digital innovation.</p>
	<br/>
	<p id="aboutflow">Feel like joining our team? <a id="emailflow" href="mailto:info@flowcpa.ca;">Email us your resume</a>.</p>
	<br/>
	<div id="teamimg" style="width:99%;">
		<div class="container" id="aimg">
			<a type="button" data-toggle="modal" data-target="#myModal">
			<img src="img/natasha.jpg" alt="Natasha" class="image" style="width:400px;height:450px;">

			<div class="middle"><div class="text">Natasha<br/><p>Founder Partner</p></div></div>
			</a>
			<div class="modal fade" id="myModal" role="dialog">
			    <div class="modal-dialog modal-lg">
				      <div class="modal-content">
				        <div id="natashaAbout" class="modal-body">
								  <h1><strong>Natasha</strong></h1>
								  <p><strong><u>Founder Partner</u></strong></p>
						          <p>Hi there, I'm Natasha, a seasoned Accountant with nearly two decades of in-depth experience in my field.</p>
								  <p></p>
								  <p>As an individual who has grown up in a household with a successful family-run business, I truly understand the importance of work/life balance and the strategy it takes to maintain it, especially for small business owners.</p>
								  <p></p>
								  <p>Since I first embarked upon my career path, I've been all about working smart, not hard. Therefore, I assist my clients in finding innovative solutions that will lighten their growing workload, not add more to it. Moreover, I help my clients steer their efforts in the right direction, so their businesses can thrive without sacrificing their personal fulfillment.</p>
								  <p></p>
								  <p>After serving as an Accountant for as long as I have, I've been imparted with an array of opportunities, including working in public practices at national and mid-size CPA firms, local small businesses, and a top 10 Canadian University. In addition to my hands-on experience, I am a CPA and CGA, granting me an optimal foundation in accounting and taxes, as well as the necessary tools to help clients not only meet their goals but to exceed them.</p>
								  <p></p>
								  <p>When I'm not immersed in my career, I love to travel and go on outdoor adventures with my loved ones, from skiing and hiking to canoeing and fly fishing. And as a family, we enjoy embarking on unique journeys, whether it is seeking out the ultimate cup of coffee in the rain forests of Puerto Rico or searching for a Celtic ruin in some remote part of Ireland.</p>
				        </div>
				      </div>
			    </div>
			</div>
		</div>
		<div class="container" id="aimg">
			<a type="button" data-toggle="modal" data-target="#myModal2">
				<img src="img/cecilia.jpg" alt="Cecilia" class="image" style="width:400px;height:450px;">
				<div class="middle"><div class="text">Cecilia<br/><p>Founder Partner</p></div></div>
			</a>
			<div class="modal fade" id="myModal2" role="dialog">
			    <div class="modal-dialog modal-lg">
			      <div class="modal-content">
			        <div id="ceciliaAbout" class="modal-body">
							  <h1><strong>Cecilia</strong></h1>
							  <p><strong><u>Founder Partner</u></strong></p>
					          <p>Hello, my name is Cecilia and I've been deeply passionate about numbers for as long as I can remember. Naturally, this drove me to start a vocation in the accounting space. Equally as passionate about helping people, I ensure my valued clients attain lasting success in business and beyond.</p>
							  <p></p>
							  <p>Throughout the course of over a decade, I have garnered extensive accounting expertise across multiple industries, including but not limited to travel, finance, and construction.</p>
							  <p></p>
							  <p>Education-wise, I received a Bachelor's degree (with honors) in Commerce and a Master in Business Administration degree from Laurentian University. I also hold two designations: a Certified General Accountant (CGA) and a Chartered Professional Accountant (CPA). Dedicated to lifelong learning, I am enrolled in an In-depth Tax course from CICA (Canadian Institute of Chartered Accountants)</p>
							  <p></p>
							  <p>Outside of the accounting world, I enjoy reading (a lot!) about science human behavior and I like to travel and learn about new cultures.</p>
			        </div>
			      </div>
			    </div>
			</div>
		</div>
	</div>
</div>

<div id="footer"></div>
</body>
</html>
