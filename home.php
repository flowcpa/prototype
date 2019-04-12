<?php

include 'config.php';
//starting the session to keep track of the username and email for the user who is currently signed-in
session_start();

//if someone tries to access this page directly without log-in, they will be redirected on sign-in page
if(!isset($_SESSION['username'])){
	header("Location: signin.php");
}
//storing user's email address to session variable
$email = $_SESSION['email'];

//Database query to get events listed on calendar
$result = $conn->query("SELECT * FROM Cevents WHERE Email='$email' order by start_event;");

//Database query to get suggested apps
$stmt = $conn->prepare("SELECT * FROM cpaUser WHERE Email='$email';");
$stmt->execute();
$user = $stmt->fetch();
$apps = json_encode($user['Apps']);																							//
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <title>FlowDIY</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="css/style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/home.css" />


<script>

  $(document).ready(function() {
	  var data = <?php echo $apps;?>;																							//coverting php variable to js variable

		//adds to page if app name is in suggested apps
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

		//to hide the calender when chatbot is activated
	  $("#chat-button").click(function(){
		  $("#calendar").hide();
	  });
	  $("#cancel").click(function(){
		  $("#calendar").show();
	  });

		var email = "<?php echo $email;?>";																					//converting php variable to js variable

		//ajax calls for adding/updating/deleting events to calender
		function showList(){
			$.ajax({
			  url:"calendar/show.php",
			  type:"POST",
			  data:{email: email},
			  success:function(){
				console.log("sadasdsad");
			  }
			 })
	  }
   var calendar = $('#calendar').fullCalendar({
    editable:true,
    header:{
     left:'prev,next today',
     center:'title',
     right:'month,agendaWeek,agendaDay'
    },
    events: 'calendar/load.php',
    selectable:true,
    selectHelper:true,
    select: function(start, end, allDay)
    {
     var title = prompt("Enter Event Title");
     if(title)
     {
      var start = $.fullCalendar.formatDate(start, "Y-MM-DD HH:mm:ss");
      var end = $.fullCalendar.formatDate(end, "Y-MM-DD HH:mm:ss");
      $.ajax({
       url:"calendar/insert.php",
       type:"POST",
       data:{title:title, start:start, end:end},
       success:function()
       {
		showList();
        calendar.fullCalendar('refetchEvents');
        alert("Added Successfully");
       }
      })
     }
    },
    editable:true,
    eventResize:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"calendar/update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function(){
       calendar.fullCalendar('refetchEvents');
       alert('Event Update');
      }
     })
    },

    eventDrop:function(event)
    {
     var start = $.fullCalendar.formatDate(event.start, "Y-MM-DD HH:mm:ss");
     var end = $.fullCalendar.formatDate(event.end, "Y-MM-DD HH:mm:ss");
     var title = event.title;
     var id = event.id;
     $.ajax({
      url:"calendar/update.php",
      type:"POST",
      data:{title:title, start:start, end:end, id:id},
      success:function()
      {
       calendar.fullCalendar('refetchEvents');
       alert("Event Updated");
      }
     });
    },

    eventClick:function(event)
    {
     if(confirm("Event Name:" +  event.title + "\nDo you want to remove it?"))
     {
      var id = event.id;
      $.ajax({
       url:"calendar/delete.php",
       type:"POST",
       data:{id:id},
       success:function()
       {
        calendar.fullCalendar('refetchEvents');
        alert("Event Removed");
       }
      })
     }
    },

   });
  });

  </script>
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
			<li class="active" ><a href="home.php">Home <span class="sr-only">(current)</span></a></li>
			<li><a href="market.php">Market Place</a></li>
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
</div>

<div class="fluid-container">
	<div class="row">
		<div class="col-md-4 col-sm-6 col-xs-12" id="vertnav">
		  <ul class="nav nav-tabs nav-stacked">
			<li role="presentation"><a id="vnav" href="" data-toggle="modal" data-target="#myModal2">Setup My Account</a></li>
			<li role="presentation"><a id="vnav" href="" data-toggle="modal" data-target="#myModal">My Apps</a></li>
			<li role="presentation"><a id="vnav" href="" data-toggle="modal" data-target="#myModal3">Tutorials and Training</a></li>
			<li role="presentation"><a id="vnav" href="market.php">Marketplace</a></li>
		  </ul>
		</div>
		<div id="screen" class="col-md-4 col-sm-6 col-xs-12">
			<div id="temp"></div>
			<div id="search">
				<form class="form-inline" method="post" action="ask.php">

					<input type="text" class="form-control" id="clientQue" name="clientQue" placeholder="Ask any question here.">
					<button type="submit" id="submitQue" class="btn btn-success">Submit</button>
				</form>
			</div>
			<table id="recent" class="table table-hover">
				<tr>
					<th>Recently Used Apps</th>
				</tr>
				<tr>
					<td>VEND</td>
				</tr>
				<tr>
					<td>A2X</td>
				</tr>
				<tr>
					<td>HUBDOC</td>
				</tr>
				<tr>
					<td>Jobber</td>
				</tr>
			</table>

		</div>
		<div class="col-md-4 hidden-sm hidden-xs" id="calendar"></div>
		<div class="col-md-4" id="calendar"></div>

	</div>
  <div id="chat-button"><i class="fa fa-3x fa-comments" aria-hidden="true"></i></div>
  <div id="chat-box">
  <div id="chat-head">Chat-Bot<i id="cancel" class="fa fa-times"></i></div>
  <div id="converse"></div>
  <div id="controls">
    <textarea id="textbox" class="controls-elements" placeholder="Say something.."></textarea>
    <button id="send" class="controls-elements"><i id="send-icon" class="fa fa-paper-plane"></i></button>
  </div>
  </div>
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
  <div class="modal fade" id="myModal2" role="dialog">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h4 class="modal-title">Upcoming Events</h4>
		</div>
		<div class="modal-body row">

			<table class="table table-hover" style="margin-top: 5px;">
				<tr>
					<th>Title</th>
					<th>Starts</th>
					<th>Ends</th>
				</tr>
					<?php while($row = $result->fetch()){?>
						<tr>
							<td><?php echo $row['title'];?></td>
							<td><?php echo $row['start_event'];?></td>
							<td><?php echo $row['end_event'];?></td>
						</tr>
					<?php }?>
			</table>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
  </div>
	<div class="modal fade" id="myModal3" role="dialog">
	<div class="modal-dialog modal-lg">
	  <div class="modal-content">
		<div class="modal-header">
		  <button type="button" class="close" data-dismiss="modal">&times;</button>
		  <h4 class="modal-title">Tutorials and Training</h4>
		</div>
		<div class="modal-body row" id="appSuggest">
			<div class="row">
	  			<div id="vidmodal" class="col-md-12 col-sm-12">
						<caption><h2><strong>Bank Rule Tutorial</strong></h2></caption>
	  				<video width="100%" height="500" poster="img/capture.jpg" controls allowfullscreen frameborder="0">
	     				<source src="vid/brt.mp4" type="video/mp4">
	     				Your browser does not support the video.
	  				</video>
	  			</div>
	  			<div id="vidmodal" class="col-md-12 col-sm-12"><iframe width="100%" height="500"  src="https://www.youtube.com/embed/_VZRdCYHpMA" frameborder="0" allow="accelerometer; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h3>Cloud accountant Vs Traditional accountant Flow CPA</h3><p>In a time of automation being able to choose the right accountant is essential to the success of your business.</p></div>
	  			<div id="vidmodal" class="col-md-12 col-sm-12"><iframe width="100%" height="500" src="https://www.youtube.com/embed/5sVAkq0KQZk" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h3>Online Bookkeeping works!</h3><p>
	  	Running a business can be challenging even under the best of circumstances. Balancing customer needs, managing corporate tax, balancing a budget, and establishing consistent marketing and advertising strategies—all while trying to increase revenues—can be a difficult task for even the most business savvy people
	  	</p></div>
	  			<div id="vidmodal" class="col-md-12 col-sm-12"><iframe width="100%" height="500" src="https://www.youtube.com/embed/5pnrk14T8ww" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h3>An Entrepreneur Guide to Starting a Business</h3><p>
	  	A 5 step guide for startup entrepreneurs on how to start a business. Do you still have questions, comment below or chat with us for a free consultation www.flowcpa.ca
	  	</p></div>
	  			<div id="vidmodal" class="col-md-12 col-sm-12"><iframe width="100%" height="500" src="https://www.youtube.com/embed/QFaADqBt5io" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h3>FLOW CPA Our Process</h3><p>
	  	our website explained in 3 minutes. Fin out more about us, what we do and how we can help!
	  	</p></div>
	  			<div id="vidmodal" class="col-md-12 col-sm-12"><iframe width="100%" height="500" src="https://www.youtube.com/embed/cRW9ghGwmjs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h3>Flow CPA Cloud Accounting</h3><p>
	  	An introduction about Flow CPA and how we can help you catapult your business to the next level by offering completely full service bookkeeping and accounting on the cloud.
	  	</p></div>
	  			<div id="vidmodal" class="col-md-12 col-sm-12"><iframe width="100%" height="500" src="https://www.youtube.com/embed/pEhnyHvyxl4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h3>Get Ready for tax season- FLOW CPA</h3><p>
	  	Are you in Canada and need help to maximize tax credits this tax season? Here at Flow we can help not only to maximize tax credits but also minimize taxes and plan for the future.
	  	</p></div>
	  			<div id="vidmodal" class="col-md-12 col-sm-12"><iframe width="100%" height="500" src="https://www.youtube.com/embed/fe7eZrLH9ng" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h3>3 Reasons why you should be tracking your investments</h3><p>
	  	Investing is a huge part your financial life, whether you are funding your retirement or saving to meet your business needs, it’s good to track your investments regularly to make sure they are been maximized. Here at 3 great reasons to add value to your portfolio.
	  	</p></div>
	  			<div id="vidmodal" class="col-md-12 col-sm-12"><iframe width="100%" height="500" src="https://www.youtube.com/embed/fLEG6I1UXwU" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe><h3>Cloud Accounting Explained By Flow CPA</h3><p>
	  	Think about when you use internet banking. Every time you access this data, you’re using the cloud. The cloud is a platform to make data and software accessible online anytime, anywhere, from any device. Your hard drive is no longer the central hub.
	  	</p></div>

	  	</div>
		</div>
		<div class="modal-footer">
		  <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
		</div>
	  </div>
	</div>
  </div>
  <script src="js/main.js"></script>
  <script src="js/index.js"></script>
</div>
</body>
</html>
