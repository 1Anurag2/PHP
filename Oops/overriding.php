<?php

class Overriding
{
    public $name;
    public function __construct($name)
    {
        $this->name = $name;
    }
    public function getName()
    {
        return "Parent Name: " . $this->name;
    }
}

class ChildOverriding extends Overriding
{
    public function getName()
    {
        return "Child Name: " . $this->name;
    }
}

$parent = new Overriding("Parent");
echo $parent->getName() . "<br>";

$child = new ChildOverriding("Child");
echo $child->getName() . "<br>";

?>