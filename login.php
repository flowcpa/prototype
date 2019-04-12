<?php

if(!isset($_SESSION['loginErrors'])){
	header("Location: index.php");
}
include 'config.php';

//starting a session
session_start();
$username = "";
$email    = "";
$_SESSION['loginErrors'] = array();																							//array to store sign-in errors

$email = $_POST['email'];																												//get email address to verify
$password = $_POST['psw'];																											//get password to verify
$password = md5($password);																											//hashing the password verify it with hashed password in database

//database query to get/check user's data
$stmt = $conn->prepare("SELECT * FROM cpaUser WHERE Email='$email' and Password = '$password';");
$stmt->execute();
$user = $stmt->fetch();

//stores username and email to session variable if sign-in is successful, else stores errors in array and notifies user about it
if ($user) {
	$_SESSION['username'] = $user['Name'];
	$_SESSION['email'] = $user['Email'];
	header("Location: home.php");																									//redirects to home page
}else{
	array_push($_SESSION['loginErrors'], "Invalid Email/Passsword");
	header("Location: signin.php");																								//redirect to signin page
}
