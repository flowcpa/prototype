<?php

include 'config.php';
//starting a session to get username and email address of user who is currently signrd-in
session_start();

if(!isset($_SESSION['username'])){
	header("Location: signin.php");
}
//variable to keep track of active class in navs
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
  <link rel="stylesheet" href="css/help.css" />


</head>
<body>
<div id="header">
	<nav class="navbar navbar-default">
	  <div class="container-fluid">
		<!-- Brand and toggle get grouped for better mobile display -->
		<div class="navbar-header">
		  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
		  </button>
		  <a class="navbar-brand" href="home.php"><img src="brand.png" style="height:100%;display:inline-block;"></a>
		</div>

		<!-- Collect the nav links, forms, and other content for toggling -->
		<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
		  <ul class="nav navbar-nav">
			<li><a href="home.php">Home <span class="sr-only">(current)</span></a></li>
			<li><a href="market.php">Market Place</a></li>
			<li class="active" ><a href="help.php">Help</a></li>
			<li><a href="about.php">About</a></li>
		  </ul>
		  <form class="navbar-form navbar-right">
			<div class="form-group">
			  <p class="text-primary">Welcome<br/> <?php echo $_SESSION['username'];?></p>
			</div>
			<!--<button type="button" formtarget="http://google.com" class="btn btn-primary navbar-btn">Sign in</button>-->
			<a href="signout.php" class="btn btn-primary navbar-btn">Sign Out</a>
		  </form>

		</div><!-- /.navbar-collapse -->
	  </div><!-- /.container-fluid -->
	</nav>
</div>

<div class="container">
	<div class="row">
		<div class="row">
			<div class="col-md-12 col-sm-12">
				<caption><h2><strong>Bank Rule Tutorial</strong></h2></caption>
				<video width="100%" height="630" poster="img/capture.jpg" controls allowfullscreen frameborder="0">
   				<source src="vid/brt.mp4" type="video/mp4">
   				Your browser does not support the video.
				</video>
			</div>
		</div>
		<div class="row">
			<br>
			<div class="col-md-6 col-sm-6"><iframe width="100%" height="315"  src="https://www.youtube.com/embed/_VZRdCYHpMA" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h3>Cloud accountant Vs Traditional accountant Flow CPA</h3><p>In a time of automation being able to choose the right accountant is essential to the success of your business.</p></div>
			<div class="col-md-6 col-sm-6"><iframe width="100%" height="315" src="https://www.youtube.com/embed/5sVAkq0KQZk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h3>Online Bookkeeping works!</h3><p>Running a business can be challenging even under the best of circumstances. Balancing customer needs, managing corporate tax, balancing a budget, and establishing consistent marketing and advertising strategies—all while trying to increase revenues—can be a difficult task for even the most business savvy people</p></div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6"><iframe width="100%" height="315" src="https://www.youtube.com/embed/5pnrk14T8ww" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h3>An Entrepreneur Guide to Starting a Business</h3><p>A 5 step guide for startup entrepreneurs on how to start a business. Do you still have questions, comment below or chat with us for a free consultation www.flowcpa.ca</p></div>
			<div class="col-md-6 col-sm-6"><iframe width="100%" height="315" src="https://www.youtube.com/embed/QFaADqBt5io" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h3>FLOW CPA Our Process</h3><p>our website explained in 3 minutes. Fin out more about us, what we do and how we can help!</p></div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6"><iframe width="100%" height="315" src="https://www.youtube.com/embed/cRW9ghGwmjs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h3>Flow CPA Cloud Accounting</h3><p>An introduction about Flow CPA and how we can help you catapult your business to the next level by offering completely full service bookkeeping and accounting on the cloud.</p></div>
			<div class="col-md-6 col-sm-6"><iframe width="100%" height="315" src="https://www.youtube.com/embed/pEhnyHvyxl4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h3>Get Ready for tax season- FLOW CPA</h3><p>Are you in Canada and need help to maximize tax credits this tax season? Here at Flow we can help not only to maximize tax credits but also minimize taxes and plan for the future.</p></div>
		</div>
		<div class="row">
			<div class="col-md-6 col-sm-6"><iframe width="100%" height="315" src="https://www.youtube.com/embed/fe7eZrLH9ng" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h3>3 Reasons why you should be tracking your investments</h3><p>Investing is a huge part your financial life, whether you are funding your retirement or saving to meet your business needs, it’s good to track your investments regularly to make sure they are been maximized. Here at 3 great reasons to add value to your portfolio.</p></div>
			<div class="col-md-6 col-sm-6"><iframe width="100%" height="315" src="https://www.youtube.com/embed/fLEG6I1UXwU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h3>Cloud Accounting Explained By Flow CPA</h3><p>Think about when you use internet banking. Every time you access this data, you’re using the cloud. The cloud is a platform to make data and software accessible online anytime, anywhere, from any device. Your hard drive is no longer the central hub.</p></div>
		</div>
	</div>
</div>
<div id="footer"></div>
</body>
</html>
