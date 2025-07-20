<?php
class personal
{
    public static $name;

    public static function getName()
    {
        return self::$name;
    }
}

class child extends personal
{
    public static function getName()
    {
        return "Child Name: " . parent::$name;
    }
}


$obj = new personal();
personal::$name = "John Doe";
echo personal::getName();

echo "<br>";

$obj1 = new child();
echo child::getName();
?>