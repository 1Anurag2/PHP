<?php
trait Traits_overriding
{
    public function hello()
    {
        echo 'hello from traits';     // second priority
    }
}

class A
{
    public function hello()
    {
        echo 'hello from class A';    // last priority
    }
}
class B extends A
{
    use Traits_overriding;
    public function hello(){
        echo 'hello from class B';   // first priority
    }
}

$obj = new B();
$obj->hello()

?>