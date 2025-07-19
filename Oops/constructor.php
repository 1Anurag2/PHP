<?php

class Constructor {
    public $name;
     function __construct($n) {
        $this->name = $n;
    }

    public function getName() {
        return $this->name;
    }
}

$constructor = new Constructor("John Doe");
echo $constructor->getName();
?>