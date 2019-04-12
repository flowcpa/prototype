<?php

$activeClass = 2;																																//variable to keep track of active class
include 'config.php';

session_start();																																//starting a session

//if someone tries to access this page directly without log-in, they will be redirected on sign-in page
if(!isset($_SESSION['username'])){
	header("Location: signin.php");
}

$email = $_SESSION['email'];																										//email address stored in session

//Database query to get suggested apps
$stmt = $conn->prepare("SELECT * FROM cpaUser WHERE Email='$email';");
$stmt->execute();
$user = $stmt->fetch();
$apps = json_encode($user['Apps']);
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>FlowDIY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/market.css">

<script>
	$(document).ready(function(){

		$("#screen").hide();
		$("#screen").show(1000);

		var data = <?php echo $apps;?>;																							//converting php variable to js variable

		//shows app on the page if it's in database
		if(data.includes("Xero")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.xero.com/ca/pricing/'><figure style='margin: 30px;'><img id='hov' class='img-responsive img-circle' src='apps/xero.png' style='height:100px; width:100px; '><figcaption>Xero</figcaption></figure></a></div>");
		}

		if(data.includes("Xero Basic")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.xero.com/ca/pricing/'><figure style='margin: 30px;'><img id='hov' src='apps/xero.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Xero Basic</figcaption></figure></a></div>");
		}

		if(data.includes("Xero Premium")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.xero.com/ca/pricing/'><figure style='margin: 30px;'><img id='hov' src='apps/xero.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Xero Premium</figcaption></figure></a></div>");
		}

		if(data.includes("Xero Standard")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.xero.com/ca/pricing/'><figure style='margin: 30px;'><img id='hov' src='apps/xero.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Xero Standard</figcaption></figure></a></div>");
		}

		if(data.includes("Xero Expense")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.xero.com/ca/pricing/'><figure style='margin: 30px;'><img id='hov' src='apps/xero.png' style='height:100px; width:100px;' class='img-responsive img-circle' ><figcaption>Xero Expense</figcaption></figure></a></div>");
		}

		if(data.includes("A2X")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.a2xaccounting.com/'><figure style='margin: 30px;'><img id='hov' src='apps/a2x.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>A2X</figcaption></figure></a></div>");
		}

		if(data.includes("Cin7")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.cin7.com/'><figure style='margin: 30px;'><img id='hov' src='apps/cin7.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Cin7</figcaption></figure></a></div>");
		}

		if(data.includes("Expensify")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.expensify.com/pricing'><figure style='margin: 30px;'><img id='hov' src='apps/expensify.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Expensify</figcaption></figure></a></div>");
		}

		if(data.includes("gocardless")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://gocardless.com/en-ca/pricing/'><figure style='margin: 30px;'><img id='hov' src='apps/gocardless.jpg' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>gocardless</figcaption></figure></a></div>");
		}

		if(data.includes("HUBDOC")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.hubdoc.com/pricing'><figure style='margin: 30px;'><img id='hov' src='apps/hubdoc.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>HUBDOC</figcaption></figure></a></div>");
		}

		if(data.includes("CRM")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.insightly.com/pricing'><figure style='margin: 30px;'><img id='hov' src='apps/insightlyCRM.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>CRM</figcaption></figure></a></div>");
		}

		if(data.includes("Jobber")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://getjobber.com/pricing/'><figure style='margin: 30px;'><img id='hov' src='apps/jobber.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Jobber</figcaption></figure></a></div>");
		}

		if(data.includes("Mind and Body")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.mindbodyonline.com/pricing'><figure style='margin: 30px;'><img id='hov' src='apps/mindbody.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>XERO</figcaption></figure></a></div>");
		}

		if(data.includes("Shopify")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.shopify.ca/plus'><figure style='margin: 30px;'><img id='hov' src='apps/shopify.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Shopify</figcaption></figure></a></div>");
		}

		if(data.includes("square")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://squareup.com/ca/pricing'><figure style='margin: 30px;'><img id='hov' src='apps/square.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>square</figcaption></figure></a></div>");
		}

		if(data.includes("Trello")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://trello.com/pricing'><figure style='margin: 30px;'><img id='hov' src='apps/trello.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Trello</figcaption></figure></a></div>");
		}

		if(data.includes("Unleashed")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.unleashedsoftware.com/pricing'><figure style='margin: 30px;'><img id='hov' src='apps/unleashed.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Unleashed</figcaption></figure></a></div>");
		}

		if(data.includes("VEND")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.vendhq.com/ca/pricing?campaign=&gclid=EAIaIQobChMIr_iQxcro4AIVKSCtBh1GqQ1UEAAYASAAEgJRBfD_BwE'><figure style='margin: 30px;'><img id='hov' src='apps/vend.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>VEND</figcaption></figure></a></div>");
		}

		if(data.includes("VENDHQ")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.vendhq.com/ca/pricing?campaign=&gclid=EAIaIQobChMIr_iQxcro4AIVKSCtBh1GqQ1UEAAYASAAEgJRBfD_BwE'><figure style='margin: 30px;'><img id='hov' src='apps/vend.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>VENDHQ</figcaption></figure></a></div>");
		}

		if(data.includes("loft")){
			$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.loft47.com/faq'><figure style='margin: 30px;'><img id='hov' src='apps/loft.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>loft</figcaption></figure></a></div>");
		}
	});
</script>

</head>
<body>


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
        <li class="active"><a  href="market.php">Market Place</a></li>
		<li><a href="help.php">Help</a></li>
		<li><a href="about.php">About</a></li>
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


<div class="container" id="screen">

		<div class="row">
			<div class="col-md-4 col-sm-6">
			  <!-- Trigger the modal with a button -->
			  <button type="button" class="btn btn-info btn-lg myApps" data-toggle="modal" data-target="#">Freelancer Tax Preparation(T1)</button>

			</div>
			<div class="col-md-4 col-sm-6">
			  <!-- Trigger the modal with a button -->
			  <button type="button" class="btn btn-info btn-lg myApps" data-toggle="modal" data-target="#">Basic Tax Preparation(T1)</button>

			</div>
			<div class="col-md-4 col-sm-6">
			  <!-- Trigger the modal with a button -->
			  <button type="button" class="btn btn-info btn-lg myApps" data-toggle="modal" data-target="#">Corporate Tax Preparation(T2)</button>

			</div>
			<div class="col-md-4 col-sm-6">
			  <!-- Trigger the modal with a button -->
			  <button type="button" class="btn btn-info btn-lg myApps" data-toggle="modal" data-target="#">Holding/investment Corporation Tax Preparation(T2)</button>

			</div>
			<div class="col-md-4 col-sm-6">
			  <!-- Trigger the modal with a button -->
			  <button type="button" class="btn btn-info btn-lg myApps" data-toggle="modal" data-target="#">Monthly Bookkeeping Clean up</button>

			</div>
			<div class="col-md-4 col-sm-6">
			  <!-- Trigger the modal with a button -->
			  <button type="button" class="btn btn-info btn-lg myApps" data-toggle="modal" data-target="#myModal">Apps</button>
			</div>
		</div>
		<!-- Modal -->
			  <div class="modal fade" id="myModal" role="dialog">
				<div class="modal-dialog modal-lg">
				  <div class="modal-content">
					<div class="modal-header">
					  <button type="button" class="close" data-dismiss="modal">&times;</button>
					  <h4 class="modal-title">My Apps</h4>
					</div>
					<div class="modal-body row" id="appSuggest">

					</div>
					<div class="modal-footer">
					  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
					</div>
				  </div>
				</div>
			  </div>

</div>

</body>
</html>
