<?php
	session_start();
	If(!isset($_SESSION['loginErrors'])){
		header("Location: index.php");
	}
	$errors = $_SESSION['loginErrors'];
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
	  <link rel="stylesheet" href="css/signin.css">

</head>
<body>
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
      <a class="navbar-brand" href="index.php"><img src="brand.png" style="height:100%;display:inline-block;"></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.html">About</a></li>
      </ul>
      
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<form action="login.php" method="post">
  <div class="imgcontainer">
    <img src="https://flowcpa.ca/wp-content/uploads/2018/11/Flow-FullLogo-NOtagline-transparent.png" alt="Avatar" class="avatar">
  </div>

  <div class="container">
	<?php
	foreach($errors as $row){
		?><p style="color: red;"><?php echo $row;?></p><?
		
	} 
	
	?>
    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Your Email Address" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>
        
    <button type="submit">Login</button>
	<p>Don't have an account?</p>
	<a href="signup.php" type="button" class="btn btn-success btn-lg btn-block">Register to FlowDIY</a>
    
  </div>

  <div class="container" style="background-color:#f1f1f1">
	<a href="index.php" class="btn btn-danger cancelbtn">Cancel</a>
    
  </div>
</form>

</body>
</html>