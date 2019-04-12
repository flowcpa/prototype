<?php
//sends client question to database for future use
	include 'config.php';
	//starting thw session
	session_start();
	//if someone tries to access this page directly without log-in, they will be redirected on sign-in page
	if(!isset($_SESSION['username'])){
		header("Location: signin.php");
	}

	if(isset($_POST['clientQue'])){
		if($_POST['clientQue'] != ""){
			$stmt = $conn->prepare("INSERT INTO cQuestions " .
                             "(ID, Question, Email) VALUES " .
                             "(?, ?, ?)");
			$stmt->execute([null, $_POST['clientQue'], $_SESSION['email']]);
			header("Location: home.php");                                             //redirects user to home page
		}else{
			header("Location: home.php");																							//redirects user to home page
		}

	}else{
		header("Location: home.php");																								//redirects user to home page
	}
