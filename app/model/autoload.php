<?php

/* The file used to autoload classes */

spl_autoload_register(function ($class_name) {
	$class_name = strtolower($class_name);
  include 'classes/class_' . $class_name . '.php';
});