<?php

// All Get functions in PHP
// These functions are used to retrieve information about classes, objects, and their properties.

// get_class()
// get_parent_class()
// get_class_vars()
// get_class_methods()
// get_object_vars()
// get_class_constants()
// get_called_class()
// get_declared_classes()
// get_declared_traits()
// get_declared_interfaces()
// class_alias()


class Myclass{
    public function getclass(){
        echo "class Nmae : " . get_class($this) . "<br>";
    }
}
class childclass extends Myclass{
    public function getparent(){
        echo "Parent class Name : " . get_parent_class($this) . "<br>";
    }
}
$obj1 = new childclass();
$obj1->getparent();
$obj = new Myclass();
$obj->getclass();

?>