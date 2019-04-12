<?php

include 'config.php';

session_start();                                                                //starting session

// initializing variables
$username = "";
$email    = "";
$_SESSION['errors'] = array();

// REGISTER USER
if (isset($_POST)) {
  // receive all input values from the form

  $username = $_POST['name'];
  $email = $_POST['email'];
  $password_1 = $_POST['psw'];
  $password_2 = $_POST['psw-repeat'];

  // form validation: ensure that the form is correctly filled ...
  // by adding (array_push()) corresponding error unto $_SESSION['errors'] array

  if ($password_1 != $password_2) {
	array_push($_SESSION['errors'], "The two passwords do not match");
  }



	 $stmt = $conn->prepare("SELECT * FROM cpaUser WHERE Email='$email';");
	  $stmt->execute();
	  $user = $stmt->fetch();

  //if users exists then show an error
  if ($user) {
		array_push($_SESSION['errors'], "User already exists");
	}

  //if email is invalid then show an error
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	  array_push($_SESSION['errors'], "Invalid Email Address");
	}

  // Finally, register user if there are no _SESSION['errors'] in the form
  if (count($_SESSION['errors']) == 0) {
  	 $password = md5($password_1);//encrypt the password before saving in the database
	   $stmt = $conn->prepare("INSERT INTO cpaUser " .
                             "(Name,Email,Password, Apps, Questions) VALUES " .
                             "(?, ?, ?, ?, ?)");
      $stmt->execute([$username, $email, $password, json_encode($_SESSION["result"]), json_encode($_SESSION["response"])]);
  	  $_SESSION['username'] = $username;
	    header("Location: signin.php");                                           //redirect to sign-in page if registration is successful
  }else{
	  header("Location: signup.php");                                             //redirect to registration page if anything wrong with registration
  }
}
