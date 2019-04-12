<?php

/*

Create Queries for table

  CREATE TABLE `cpaUser` (
   `Name` varchar(25) NOT NULL,
   `Email` varchar(25) NOT NULL,
   `Password` varchar(100) NOT NULL,
   `Apps` text,
   `Questions` text,
   `ID` int(11) NOT NULL AUTO_INCREMENT,
   PRIMARY KEY (`ID`)
  )

  CREATE TABLE `Cevents` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `start_event` datetime NOT NULL,
  `end_event` datetime NOT NULL,
  `Email` text NOT NULL,
  PRIMARY KEY (`id`)
  )

  CREATE TABLE `cQuestions` (
  `ID` int(100) NOT NULL AUTO_INCREMENT,
  `Question` text NOT NULL,
  `Email` text NOT NULL,
  PRIMARY KEY (`ID`)
  )


*/

$DB['server'] = 'localhost';                                                    //Server
$DB['user'] = '000743545';                                                      //username
$DB['password'] = '19990801';                                                   //password
$DB['db'] = '000743545';                                                        //database name

try
{

  // connect to database
  $conn = new PDO("mysql:host=".$DB['server'].";dbname=".$DB['db'],
	              $DB['user'],
				  $DB['password']);

  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // have my fetch data returned as an associative array
  $conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

}
catch(PDOException $e)                                                          //thows an exception if anything goes wrong with database
{
  echo "Connection failed: " . $e->getMessage();
  exit();
}
