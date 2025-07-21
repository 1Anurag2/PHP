<?php
class Method_chaining
{
    public function first()
    {
        echo "first function\n";
        return $this;
    }
    public function second()
    {
        echo "second function\n";
        return $this;

    }
    public function third()
    {
        echo "third function\n";
    }
}

$obj = new Method_chaining();
$obj->first()->second()->third();
?>