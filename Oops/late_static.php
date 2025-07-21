<?php
class base {
    protected static $name = 'Anurag';

    public static function getName() {
        echo "Base Name: " . static::$name . "<br>";
        echo self::$name;
    }
}
class derived extends base {
    protected static $name = 'Sahil';
    
}

$obj = new derived();
echo $obj::getName(); 
?>