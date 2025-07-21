<?php
trait A
{
    public function info()
    {
        echo "This is an info method in trait A\n";
    }
    public function show()
    {
        echo "Hello from trait A\n";
    }
}

trait sayhello
{
    public function sayHello()
    {
        echo "Hello from trait sayhello\n";
    }
}
class B
{
    use A, sayhello;
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
$b->show();
$b->sayHello();


?>