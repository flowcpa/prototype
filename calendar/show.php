<?php
//insert.php

include '../config.php';

session_start();

if(!isset($_SESSION['username'])){
	header("Location: signin.php");
}

$email = $_SESSION['email'];




?>