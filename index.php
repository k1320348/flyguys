<?php

$current_file = basename($_SERVER['PHP_SELF']);

$url = (isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";

$query_string = parse_url($url, PHP_URL_QUERY);

switch ($query_string) {
	case "":
  case "page=home":
    require 'app/controller/controller_homepage.php';
    break;
  case "page=destinations":
    require 'app/controller/controller_destinations.php';
    break;
  case "page=luggage-policy":
    require 'app/controller/controller_luggage-policy.php';
    break;
  case "page=sign-in":
    require 'app/controller/controller_sign-in.php';
    break;
  default:
    require 'app/controller/controller_404.php';
}