<?php
class Modifier
{
    protected $name;  // public , protected, private
    public function __construct($name = 'None')
    {
        $this->name = $name;

    }
    public function info()
    {
        echo $this->name;
    }
}

class protect extends Modifier
{
    public function getname()
    {
        echo 'Your Name : ' . $this->name;
    }
}

// $obj = new Modifier();
// $obj->name = 'Anurag';
// $obj->info();

echo '<br>';
$obj1 = new protect('Anurag');
// $obj1->name = 'sahil';
$obj1->getname();

?>