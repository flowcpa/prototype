<?php
	session_start();																															//starting a session
	$errors = $_SESSION['errors'];																								//errors array
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
	<link rel="stylesheet" href="css/signup.css">
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
      <a class="navbar-brand" href="index.php"><img src="brand.png" style="height:100%;display:inline-block;"></a>
    </div>

    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li><a href="index.php">Home <span class="sr-only">(current)</span></a></li>
        <li><a href="about.html">About</a></li>
      </ul>
      <form class="navbar-form navbar-right">
        <div class="form-group">
		  <p class="text-primary">Already have an account?</p>
        </div>
		<a href="signin.php" class="btn btn-primary navbar-btn">Sign In</a>
      </form>

    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
<form action="register.php" method = 'post' style="border:1px solid #ccc">
  <div class="container">
    <h1>Sign Up to FlowDIY!</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	<?php
	foreach($errors as $row){
		?><p style="color: red;"><?php echo $row;?></p><?
	}

	?>
	<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required>

    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" id="email" name="email" required>

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="psw" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="psw-repeat" required>

    <p>By creating an account you agree to our <font color="blue">Terms & Privacy</font>.</p>

    <div class="clearfix">
	  <a href="index.php" style="margin: 5px;" type="button" class="btn btn-danger cancelbtn">Cancel</a>
	  <button  style="margin: 5px;" type="submit" class="btn btn-success signupbtn" name="reg_user">Register</button>

    </div>
  </div>
</form>

</body>
</html>
