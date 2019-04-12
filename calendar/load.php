<?php

//load.php

include '../config.php';

session_start();

if(!isset($_SESSION['username'])){
	header("Location: signin.php");
}

$email = $_SESSION['email'];

$data = array();

$query = "SELECT * FROM Cevents WHERE Email = '$email'";

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

?>