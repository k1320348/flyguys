<?php

class Flight {
	private $flightID;
	private $flightType;
	private $flightNumber;
	private $origin;
	private $destination;
  private $departureDay;
  private $departureTime;
  private $arrivalTime;
	private $flightDuration;
	private $price;
  private $status;

  function __construct() { }

  function __get($name) {
    return $this->$name;
  }

  function __set($name, $value) {
    $this->$name = $value;
  }
}