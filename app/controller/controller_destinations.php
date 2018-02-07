<?php

require 'app/model/model_dataAccess.php';
$results = getAllFlights();
require 'app/view/destinations.php';