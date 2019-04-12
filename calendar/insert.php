<?php
//insert.php

include '../config.php';

session_start();

if(!isset($_SESSION['username'])){
	header("Location: signin.php");
}

$email = $_SESSION['email'];

if(isset($_POST["title"]))
{
 $query = "
 INSERT INTO Cevents 
 (title, start_event, end_event, Email) 
 VALUES (:title, :start_event, :end_event, :Email)";
 $statement = $conn->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end'],
   ':Email' => $email
  )
 );
}


?>