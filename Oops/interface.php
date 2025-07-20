<?php

interface A
{
    function info();
}
interface B
{
    function show();
}

class C implements A, B
{
    public function show()
    {
        echo "Hello from C";
    }
    public function info()
    {
        echo "This is an info method in class C";
    }
}

$c = new C();
$c->show();
$c->info();

?>