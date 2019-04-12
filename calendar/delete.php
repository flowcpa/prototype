<?php

//delete.php

	if(isset($_POST["id"]))
	{
	 
	include '../config.php';

	session_start();

	if(!isset($_SESSION['username'])){
		header("Location: signin.php");
	}
	 $query = "
	 DELETE from Cevents WHERE id=:id
	 ";
	 $statement = $conn->prepare($query);
	 $statement->execute(
	  array(
	   ':id' => $_POST['id']
	  )
	 );
	}

?>