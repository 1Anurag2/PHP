<?php

// require 'classes/first.php';
// require 'classes/second.php';

// Register autoloader function
spl_autoload_register(function ($class) {
    require 'classes/' . $class . '.php';
});

// Now create objects
$obj = new Second();
$obj1 = new First();
?>
