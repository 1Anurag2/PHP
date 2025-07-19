<?php
$x = "Hello Anurag";    // this is a single line comment
var_dump($x . "<br>");    # this is also single line comment
$x = 5055;  //integer     /* this is multiple line comments */
$x = true; // bool
$x = 5785.78; // float
$x = array("name", "anurag", "verma");  // Array  
var_dump($x);

# constant variable

define("name", "anurag");
print name . "<br>";
define("number", 756);
$a = number + 44;
echo $a . "<br>";
echo number . "<br>";


//Arithmatic operations

$x = 59;
$y = 95;
$z = $x + $y;
echo $z . "<br>";
$y++;     // ++y;
echo $y;
    
?>