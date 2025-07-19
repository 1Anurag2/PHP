<?php

function myfunction($firstName, $LastName = "last")
{
    echo "MY first name is $firstName and last name is $LastName<br>";
}

myfunction("Anurag", "verma");
myfunction("sahil");
myfunction(" ");
?>