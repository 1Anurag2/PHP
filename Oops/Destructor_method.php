<?php

class Destructor_method
{
    public function __construct()
    {
        echo "Constructor function<br>";
    }
    public function show()
    {
        echo "Show function<br>";
    }
    public function __destruct()
    {
        echo "Destructor function it run at the end of class";
    }
}

$obj = new Destructor_method();
$obj->show();
$obj->show();
$obj->show();
$obj->show();

?>