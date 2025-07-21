<?php
trait A
{
    public function info()
    {
        echo "This is an info method in trait A";
    }
}

class B
{
    use A;
}
class C
{
    use A;
}
$c = new C();
$c->info();
echo "<br>";
$b = new B();
$b->info();

?>