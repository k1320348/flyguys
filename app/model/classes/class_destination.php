<?php

class Destination {
	private $destinationID;
  private $destinationType;
	private $destinationName;
	private $destinationCountry;

  function __construct() { }

  function __get($name) {
    return $this->$name;
  }

  function __set($name, $value) {
    $this->$name = $value;
  }
}