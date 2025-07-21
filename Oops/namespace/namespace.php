<?php
require 'first.php';
require 'second.php';

function wow()
{
    echo 'it is wow function in namespace.php file';
}

$obj = new first_name\test();
$obj1 = new second_name\test();

$obj->first();
echo "</br>";
$obj1->second();
echo "</br>";
wow();
echo "</br>";
first_name\wow();
?>