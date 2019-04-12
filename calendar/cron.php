<?php

//cron.php

include '../config.php';

session_start();

if(!isset($_SESSION['username'])){
	header("Location: signin.php");
}
$data = array();

$query = "SELECT * FROM Cevents ORDER BY id";

$statement = $conn->prepare($query);

$statement->execute();

$result = $statement->fetchAll();

foreach($result as $row)
{
 $data[] = array(
  'id'   => $row["id"],
  'title'   => $row["title"],
  'start'   => $row["start_event"],
  'end'   => $row["end_event"]
 );
}

echo json_encode($data);
foreach($data as $row){
	$msg = "<br />";
	$msg .= "You have a Meeting: " . $row['title'];
	$msg .= "<br />";
	$msg .= "Meeting time: From " . $row['start'] . " to " . $row['end'];
	echo $msg;
	$msg = wordwrap($msg, 70);
	mail("neelthakkar49@gmail.com","Reminder email",$msg);
}




?>