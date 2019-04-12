<?php

//update.php

include '../config.php';

session_start();

if(!isset($_SESSION['username'])){
	header("Location: signin.php");
}
if(isset($_POST["id"]))
{
 $query = "
 UPDATE Cevents 
 SET title=:title, start_event=:start_event, end_event=:end_event 
 WHERE id=:id
 ";
 $statement = $conn->prepare($query);
 $statement->execute(
  array(
   ':title'  => $_POST['title'],
   ':start_event' => $_POST['start'],
   ':end_event' => $_POST['end'],
   ':id'   => $_POST['id']
  )
 );
}

?>