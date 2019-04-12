<?php
	session_start();																															// start a new session
	$_SESSION['errors'] = array();																								// to keep track of signup errors
	$_SESSION['loginErrors'] = array();																						// to keep track of login errors
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>FlowDIY</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="css/style.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="css/index.css">

	<script>
		$(document).ready(function(){

			$("#main").hide(); 																												// hide the body at the load page starting
			$("#main").show(1500); 																										// show body after 1.5 seconds for the transition
			// click function on click of Next button on each question
			$("#next").click(function(){
				  const que1 = $('#industry').val(); 																		// set selected value from question 1 in que1
				  const que2 = $('input[name=que2]:checked').val();											// set selected value from question 2 in que2
				  const que3 = $('input[name=que3]:checked').val();											// set selected value from question 3 in que3
				  const que4 = $('input[name=que4]:checked').val();											// set selected value from question 4 in que4
				  const que41 = $('input[name=que41]:checked').val();										// set selected value from question 4.1 in que41
				  const que42 = $('input[name=que42]:checked').val();										// set selected value from question 4.2 in que42
				  const que5 = $('input[name=que5]:checked').val();											// set selected value from question 5 in que5
				  const que6 = $('input[name=que6]:checked').val();											// set selected value from question 6 in que6
				  const que61 = $('input[name=que61]:checked').val();										// set selected value from question 6.1 in que61
				  const que7 = $('input[name=que7]:checked').val();											// set selected value from question 7 in que7
				  const que71 = $('input[name=que71]:checked').val();										// set selected value from question 7.1 in que71
				  const que8 = $('input[name=que8]:checked').val();											// set selected value from question 8 in que8
				  const que9 = $('input[name=que9]:checked').val();											// set selected value from question 9 in que9
				  const que91 = $('input[name=que91]:checked').val();										// set selected value from question 9.1 in que91
				  const que10 = $('input[name=que10]:checked').val();										// set selected value from question 10 in que10
					// if all the values are entered, ajax call will be made to get all suggested apps
					if(!(que1 == null || que2 == null || que3 == null || que4 == null || que5 == null || que6 == null || que7 == null || que8 == null || que9 == null || que10 == null)){
							$.ajax({
								url: "questionnaire.php",
								data: {industry: que1, location: que2, structure: que3, employee: que4, nEmployee: que41, payMethod: que42, reimburse: que5, sale: que6,saleMethod: que61, inventory: que7, offerService: que71, nInvoice: que8, creditCard: que9, nTransaction: que91, technology: que10},
								type: "POST",
								success: function(data){
									console.log(data);
									$("#bttn").show();																						// show div with id bttn
									$("#form").hide();																						// hide the form to show app suggestions
									$("#appSuggest").show();																			// show all the suggested apps
									// if mapping has Xero app, show that app
									if(data.includes("Xero")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.xero.com/ca/pricing/'><figure style='margin: 30px;'><img id='hov' class='img-responsive img-circle' src='apps/xero.png' style='height:100px; width:100px; '><figcaption>Xero</figcaption></figure></a></div>");
									}
									// if mapping has Xero basic app, show that app
									if(data.includes("Xero Basic")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.xero.com/ca/pricing/'><figure style='margin: 30px;'><img id='hov' src='apps/xero.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Xero Basic</figcaption></figure></a></div>");
									}
									// if mapping has Xero premium app, show that app
									if(data.includes("Xero Premium")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.xero.com/ca/pricing/'><figure style='margin: 30px;'><img id='hov' src='apps/xero.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Xero Premium</figcaption></figure></a></div>");
									}
									// if mapping has Xero standard app, show that app
									if(data.includes("Xero Standard")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.xero.com/ca/pricing/'><figure style='margin: 30px;'><img id='hov' src='apps/xero.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Xero Standard</figcaption></figure></a></div>");
									}
									// if mapping has Xero expense app, show that app
									if(data.includes("Xero Expense")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.xero.com/ca/pricing/'><figure style='margin: 30px;'><img id='hov' src='apps/xero.png' style='height:100px; width:100px;' class='img-responsive img-circle' ><figcaption>Xero Expense</figcaption></figure></a></div>");
									}
									// if mapping has A2X app, show that app
									if(data.includes("A2X")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.a2xaccounting.com/'><figure style='margin: 30px;'><img id='hov' src='apps/a2x.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>A2X</figcaption></figure></a></div>");
									}
									// if mapping has Cin7 app, show that app
									if(data.includes("Cin7")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.cin7.com/'><figure style='margin: 30px;'><img id='hov' src='apps/cin7.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Cin7</figcaption></figure></a></div>");
									}
									// if mapping has Expensify app, show that app
									if(data.includes("Expensify")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.expensify.com/pricing'><figure style='margin: 30px;'><img id='hov' src='apps/expensify.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Expensify</figcaption></figure></a></div>");
									}
									// if mapping has gocardless app, show that app
									if(data.includes("gocardless")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://gocardless.com/en-ca/pricing/'><figure style='margin: 30px;'><img id='hov' src='apps/gocardless.jpg' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>gocardless</figcaption></figure></a></div>");
									}
									// if mapping has HUBDOC app, show that app
									if(data.includes("HUBDOC")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.hubdoc.com/pricing'><figure style='margin: 30px;'><img id='hov' src='apps/hubdoc.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>HUBDOC</figcaption></figure></a></div>");
									}
									// if mapping has CRM app, show that app
									if(data.includes("CRM")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.insightly.com/pricing'><figure style='margin: 30px;'><img id='hov' src='apps/insightlyCRM.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>CRM</figcaption></figure></a></div>");
									}
									// if mapping has Jobber app, show that app
									if(data.includes("Jobber")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://getjobber.com/pricing/'><figure style='margin: 30px;'><img id='hov' src='apps/jobber.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Jobber</figcaption></figure></a></div>");
									}
									// if mapping has Mind and Body app, show that app
									if(data.includes("Mind and Body")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.mindbodyonline.com/pricing'><figure style='margin: 30px;'><img id='hov' src='apps/mindbody.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>XERO</figcaption></figure></a></div>");
									}
									// if mapping has Shopify app, show that app
									if(data.includes("Shopify")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.shopify.ca/plus'><figure style='margin: 30px;'><img id='hov' src='apps/shopify.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Shopify</figcaption></figure></a></div>");
									}
									// if mapping has Square app, show that app
									if(data.includes("square")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://squareup.com/ca/pricing'><figure style='margin: 30px;'><img id='hov' src='apps/square.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>square</figcaption></figure></a></div>");
									}
									// if mapping has Trello app, show that app
									if(data.includes("Trello")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://trello.com/pricing'><figure style='margin: 30px;'><img id='hov' src='apps/trello.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Trello</figcaption></figure></a></div>");
									}
									// if mapping has Unleashed app, show that app
									if(data.includes("Unleashed")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.unleashedsoftware.com/pricing'><figure style='margin: 30px;'><img id='hov' src='apps/unleashed.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>Unleashed</figcaption></figure></a></div>");
									}
									// if mapping has VeND app, show that app
									if(data.includes("VEND")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.vendhq.com/ca/pricing?campaign=&gclid=EAIaIQobChMIr_iQxcro4AIVKSCtBh1GqQ1UEAAYASAAEgJRBfD_BwE'><figure style='margin: 30px;'><img id='hov' src='apps/vend.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>VEND</figcaption></figure></a></div>");
									}
									// if mapping has VENDHQ app, show that app
									if(data.includes("VENDHQ")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.vendhq.com/ca/pricing?campaign=&gclid=EAIaIQobChMIr_iQxcro4AIVKSCtBh1GqQ1UEAAYASAAEgJRBfD_BwE'><figure style='margin: 30px;'><img id='hov' src='apps/vend.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>VENDHQ</figcaption></figure></a></div>");
									}
									// if mapping has loft app, show that app
									if(data.includes("loft")){
										$("#appSuggest").append("<div class='col-lg-4 col-md-4 col-sm-6 col-xs-12'><a <a target='_blank'  href='https://www.loft47.com/faq'><figure style='margin: 30px;'><img id='hov' src='apps/loft.png' class='img-responsive img-circle' style='height:100px; width:100px;'><figcaption>loft</figcaption></figure></a></div>");
									}
								}
						});
					}

			});
		});
	</script>
</head>
<body>
	<div id="main">
		<nav class="navbar navbar-default">
		  <div class="container-fluid">
				<div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand" href="index.php"><img src="brand.png" style="height:100%;display:inline-block;"></a>
				</div>

				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
						<li class="active"><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
						<li><a href="faqs.html">FAQs</a></li>
						<li><a href="howitworks.html">How it works</a></li>
						<li><a href="about.html">About</a></li>
				  </ul>
				  <form class="navbar-form navbar-right">
						<div class="form-group">
					  	<p class="text-primary">Already have an account?</p>
						</div>
						<a href="signin.php" class="btn btn-primary navbar-btn">Sign In</a>
				  </form>

				</div>
		  </div>
		</nav>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3 text-center">
				<div id="screen" class="screen">
					<div id="form">
						<form method="get">
							<div class="text-left">
								<div id="question1">
									<legend><h1>1. Select your industry.</h1></legend>
									<br>
									 <select class="form-control" id="industry">
									  <option selected>Select from the  drop-down list</option>
									  <option value="eCommerce">E-commerce</option>
									  <option value="construction">Construction</option>
									  <option value="retailTrade">Retail</option>
									  <option value="manufacturing">Manufacturing</option>
									  <option value="scientific">Scientific and Technical Services</option>
									  <option value="financial">Financial and Insuance</option>
									  <option value="realEstate">Real Estate</option>
									  <option value="it">Information Technology</option>
									  <option value="education">Education and Training</option>
									  <option value="health">Health Care & Social Assistance</option>
									  <option value="arts">Arts and Recreation Services</option>
									</select>
									<input type ="button"  id="next1" value="Next" class="btn btn-primary">
								</div>
							</div>

							<div class="text-left">
								<div id="question2">
									<legend><h1>2. Where is your business located?</h1></legend>
									<br>
									<label class="container">We are located in Canada and send less than 5 invoices a month<input  type="radio" name="que2" value="gInside"><span class="checkmark"></span></label>
									<br>
									<label class="container">We are located in Canada and send more than 5 invoices a month<input type="radio" name="que2" value="lInside"><span class="checkmark"></span></label>
									<br>
									<label class="container">We are located outside of Canada<input type="radio" name="que2" value="outside" required><span class="checkmark"></span></label>
									<input type ="button"  id="last2" value="Previous" class="btn btn-primary">
									<input type ="button"  id="next2" value="Next" class="btn btn-primary">
								</div>
							</div>

							<div class="text-left">
								<div id="question3">
									<legend><h1>3. How is your business structured? </h1></legend>
									<br>

									<label class="container">Incorporated<input type="radio" name="que3" value="incorporated" required><span class="checkmark"></span></label>
									<br>
									<label class="container">Sole practitioner or sole proprietor<input type="radio" name="que3" value="sole"><span class="checkmark"></span></label>
									<br>
									<label class="container">Partnership<input type="radio" name="que3" value="partnership"><span class="checkmark"></span></label>
									<br>
									<label class="container">Unsure<input type="radio" name="que3" value="notSure"><span class="checkmark"></span></label>
									<input type ="button"  id="last3" value="Previous" class="btn btn-primary">
									<input type ="button"  id="next3" value="Next" class="btn btn-primary">
								</div>
							</div>

							<div class="text-left">
								<div id="question4">
									<legend><h1>4. Do you have employees? </h1></legend>
									<br>
									<label class="container"><input type="radio" name="que4" id="que4yes" value="yes" required>Yes<span class="checkmark"></span></label>
									<br>
									<label class="container"><input type="radio" name="que4" id="que4no" value="no">No<span class="checkmark"></span></label>

									<div id="que41">
										<div class="text-left">
											<div id="question41">
												<legend><h3>4.1 How many employees do you have?  </h3></legend>
											</div>
											<br>

											<label class="container"><input type="radio" name="que41" value="1-5">1-5<span class="checkmark"></span></label>
											<br>
											<label class="container"><input type="radio" name="que41" value="6-10">6-10<span class="checkmark"></span></label>
											<br>
											<label class="container"><input type="radio" name="que41" value="11-20">11-20<span class="checkmark"></span></label>
											<br>
											<label class="container"><input type="radio" name="que41" value="20+">20+<span class="checkmark"></span></label>
										</div>

										<div class="text-left">
											<div id="question42">
												<legend><h3>4.2  How often do you pay your employees?  </h3></legend>
											</div>
											<br>

											<label class="container"><input type="radio" name="que42" value="weekly">Weekly<span class="checkmark"></span></label>
											<br>
											<label class="container"><input type="radio" name="que42" value="bi-weekly">Bi-Weekly<span class="checkmark"></span></label>
											<br>
											<label class="container"><input type="radio" name="que42" value="monthly">Monthly<span class="checkmark"></span></label>
											<br>
											<label class="container"><input type="radio" name="que42" value="bi-monthly">Bi-Monthly<span class="checkmark"></span></label>
										</div>
									</div>
									<input type ="button"  id="last4" value="Previous" class="btn btn-primary">
									<input type ="button"  id="next4" value="Next" class="btn btn-primary">
								</div>
							</div>
							<div class="text-left">
								<div id="question5">
									<legend><h1>5. Do you reimburse your employees for eligible expenses?</h1></legend>
									<br>
									<label class="container"><input type="radio" name="que5" value="yes" required>Yes<span class="checkmark"></span></label>
									<br>
									<label class="container"><input type="radio" name="que5" value="no">No<span class="checkmark"></span></label>
									<input type ="button"  id="last5" value="Previous" class="btn btn-primary">
									<input type ="button"  id="next5" value="Next" class="btn btn-primary">
								</div>
							</div>

							<div class="text-left">
								<div id="question6">
									<legend><h1>6. Does your business sell products?</h1></legend>
									<br>
									<label class="container"><input type="radio" name="que6" id="que6yes" value="yes" required>Yes<span class="checkmark"></span></label>
									<br>
									<label class="container"><input type="radio" name="que6" id="que6no" value="no">No<span class="checkmark"></span></label>
									<div id="que61">
										<div class="text-left">
											<div id="question61">
												<legend><h3>6.1 How do you sell your products?</h3></legend>
											</div>
											<br>
											<label class="container"><input type="radio" name="que61" value="online">Online<span class="checkmark"></span></label>
											<br>
											<label class="container"><input type="radio" name="que61" value="store">Store<span class="checkmark"></span></label>
											<br>
											<label class="container"><input type="radio" name="que61" value="both">Both<span class="checkmark"></span></label>
										</div>
									</div>
									<input type ="button"  id="last6" value="Previous" class="btn btn-primary">
									<input type ="button"  id="next6" value="Next" class="btn btn-primary">
								</div>
							</div>
							<div class="text-left">
								<div id="question7">
									<legend><h1>7. Do you keep inventory?</h1></legend>
									<br>
									<label class="container"><input type="radio" name="que7" id="que7yes" value="yes" required>Yes<span class="checkmark"></span></label>
									<br>
									<label class="container"><input type="radio" name="que7" id="que7no" value="no">No<span class="checkmark"></span></label>
									<div id="que71">
										<div class="text-left">
											<div id="question71">
												<legend><h3>7.1 Do you offer services?</h3></legend>
											</div>
											<br>
											<label class="container"><input type="radio" name="que71" value="yes">Yes<span class="checkmark"></span></label>
											<br>
											<label class="container"><input type="radio" name="que71" value="no">No<span class="checkmark"></span></label>
										</div>
									</div>
									<input type ="button"  id="last7" value="Previous" class="btn btn-primary">
									<input type ="button"  id="next7" value="Next" class="btn btn-primary">
								</div>
							</div>
							<div class="text-left">
								<div id="question8">
									<legend><h1>8. How many invoices do you create every month?</h1></legend>
									<br>
									<label class="container"><input type="radio" name="que8" value="1-5">1-5<span class="checkmark"></span></label>
									<br>
									<label class="container"><input type="radio" name="que8" value="6-10">6-10<span class="checkmark"></span></label>
									<br>
									<label class="container"><input type="radio" name="que8" value="11-20">11-20<span class="checkmark"></span></label>
									<br>
									<label class="container"><input type="radio" name="que8" value="20+">20+<span class="checkmark"></span></label>
									<input type ="button"  id="last8" value="Previous" class="btn btn-primary">
									<input type ="button"  id="next8" value="Next" class="btn btn-primary">
								</div>
							</div>

							<div class="text-left">
								<div id="question9">
									<legend><h1>9. Do you accept credit cards as payments?</h1></legend>
									<br>
									<label class="container"><input type="radio" name="que9" id="que9yes"value="yes" required>Yes<span class="checkmark"></span></label>
									<br>
									<label class="container"><input type="radio" name="que9" id="que9no" value="no">No<span class="checkmark"></span></label>
									<div id="que91">
										<div class="text-left">
											<div id="question9">
												<legend><h3>9.1 How many credit card transactions do you process each month? </h3></legend>
											</div>
											<br>
											<label class="container"><input type="radio" name="que91" value="1-10">1-10<span class="checkmark"></span></label>
											<br>
											<label class="container"><input type="radio" name="que91" value="11-30">11-30<span class="checkmark"></span></label>
											<br>
											<label class="container"><input type="radio" name="que91" value="30+">30+<span class="checkmark"></span></label>
										</div>
									</div>
									<input type ="button"  id="last9" value="Previous" class="btn btn-primary">
									<input type ="button"  id="next9" value="Next" class="btn btn-primary">
								</div>
							</div>
							<div class="text-left">
								<div id="question10">
									<legend><h1>10. How confortable do you feel with technology?</h1></legend>
									<br>
									<label class="container"><input type="radio" name="que10" value="awesome">Awesome! I love using technology<span class="checkmark"></span></label>
									<br>
									<label class="container"><input type="radio" name="que10" value="somewhat">I am somewhat confortable<span class="checkmark"></span></label>
									<br>
									<label class="container"><input type="radio" name="que10" value="hard">I find it hard to keep up to date<span class="checkmark"></span></label>
									<input type ="button"  id="last10" value="Previous" class="btn btn-primary">
									<input type ="button"  id="next" value="Submit" class="btn btn-primary btn-lg btn-block">
								</div>
							</div>
						</form>
					</div>
				</div>
				<div class="row" id="appSuggest"></div>
				<div id="bttn">
					<h4>These are the recommended apps for your Business. To access these apps on discounted price, register with FlowDIY!</h4>
					<a href="register.php" type="button" class="btn btn-success btn-lg btn-block">Register to FlowDIY</a>
					<a href="index.php" type="button" class="btn btn-primary btn-lg btn-block">Fill the Form again!</a>
				</div>
			</div>
		</div>
		<div id="chat-button">
			<i class="fa fa-3x fa-comments" aria-hidden="true"></i>
		</div>
		<div id="chat-box">
			<div id="chat-head">Chat-Bot<i id="cancel" class="fa fa-times"></i></div>
			<div id="converse"></div>
			<div id="controls">
				<textarea id="textbox" class="controls-elements" placeholder="Say something.."></textarea>
				<button id="send" class="controls-elements"><i id="send-icon" class="fa fa-paper-plane"></i></button>
			</div>
		</div>
		<script src="js/main.js"></script>
		<script src="js/index.js"></script>
	</div>
</body>
</html>
