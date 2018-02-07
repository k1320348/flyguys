<?php

require 'app/model/model_dataAccess.php';
$allDestinations = getAllDestinations();
$flightsOfToday = getFlightsOfToday();
require 'app/view/homepage.php';