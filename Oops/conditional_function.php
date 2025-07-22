<?php

trait Conditional_trait {
    public function checkTrait() {
        echo "Trait Conditional_trait is being used.<br>";
    }
}
// Trait existence check
if (trait_exists('Conditional_trait')) {
    echo "Trait Conditional_trait exists.<br>";
    class Conditional_function {
        use Conditional_trait;
    }
} else {
    echo "Trait Conditional_trait does not exist.<br>";
}

interface Conditional_interface {
    public function checkCondition();
}
// Interface existence check
if(interface_exists('Conditional_interface')) {
    echo "Interface Conditional_interface exists.<br>";
    class Myclass implements Conditional_interface {
        public function checkCondition() {
            echo "Condition checked.<br>";
        }
    }
} else {
    echo "Interface Conditional_interface does not exist.<br>";
}
class Conditional_class{
    public $name;
    public function myMethod() {
        echo "Method myMethod called.<br>";
    }
}
$Obj = new Conditional_class();

//Property existence check
if(property_exists($Obj, 'name')) {
    echo "Property 'name' exists in Conditional_class.<br>";
} else {
    echo "Property 'name' does not exist in Conditional_class.<br>";
}

//Method existence check
if(method_exists($Obj, 'myMethod')) {
    echo "Method myMethod exists in Conditional_class.<br>";
    $Obj->myMethod();
} else {
    echo "Method myMethod does not exist in Conditional_class.<br>";
}

//Class existence check
if(class_exists('Conditional_class')) {
    echo "Class Conditional_class exists.<br>";
    $obj = new Conditional_function();
} else {
    echo "Class Conditional_class does not exist.<br>";
}

//Object type check
if(is_a($obj, 'Conditional_class')) {
    echo "Object is an instance of Conditional_class.<br>";
    $obj->checkTrait();
} else {
    echo "Object is not an instance of Conditional_class.<br>";
}

class Base{

}
class Derived extends Base{
    public function __construct() {
        echo "Derived class constructor called.<br>";
    }
}
//Class type check
if(is_subclass_of($obj, 'Base')) {
    echo "Derived class is a subclass of Base class.<br>";
    $obj = new Derived();
} else {
    echo "Derived class is not a subclass of Base class.<br>";
}
?>