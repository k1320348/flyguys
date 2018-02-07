<?php

require_once 'autoload.php';

$pdo = new PDO("mysql:host=carpe-noctem.no.mysql;dbname=carpe_noctem_no_flyguys_test","carpe_noctem_no_flyguys_test","flyguys_test",[PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]);


// Flights

function getAllFlights() {
  global $pdo;
  $statement = $pdo->prepare("SELECT * FROM Flights");
  $statement->execute();
  $results = $statement->fetchAll(PDO::FETCH_CLASS, "Flight");
  return $results;
}

function getFlightSearchResults() {

  if(!isset($_POST['to'])) {
    $_POST["to"] = 'Stansted';
  }

  if(isset($_POST['from']) && isset($_POST['to']) && isset($_POST['departureDay']) ) {
  	global $pdo;
  	$statement = $pdo->prepare("SELECT flightNumber, origin, destination, departureDay, departureTime, arrivalTime, price FROM Flights WHERE origin = '$origin' AND destination = '$destination' AND departureDay = '$departureDay' ORDER BY departureTime");
    $statement->execute();
    $results = $statement->fetchAll(PDO::FETCH_CLASS, "Flight");
    return $results;
  }
}

function getFlightsOfToday() {
  global $pdo;
  $today = date('Y-m-d');
  $statement = $pdo->prepare("SELECT flightNumber, origin, destination, departureDay, departureTime, arrivalTime, status FROM Flights WHERE departureDay = '$today' ORDER BY departureTime");
  $statement->execute();
  $results = $statement->fetchAll(PDO::FETCH_CLASS, "Flight");
  return $results;
}


// Destinations

function getAllDestinations() {
  global $pdo;
  $statement = $pdo->prepare("SELECT * FROM Destinations");
  $statement->execute();
  $results = $statement->fetchAll(PDO::FETCH_CLASS, "Destination");
  return $results;
}

?>