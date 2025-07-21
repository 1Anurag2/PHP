<!-- <?php
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
    public function hello()
    {
        echo 'hello from class B';   // first priority
    }
}

$obj = new B();
$obj->hello()

    ?> -->

<!--  traits Traits_overriding -->
<?php
trait hello
{
    private function sayhello()
    {
        echo 'Hello from hello traits';
    }
}
trait hi
{
    public function sayhello()
    {
        echo 'Hello from hi traits';
    }
}

class base
{
    use hello, hi {
        hello::sayhello as public newhello;
        hello::sayhello insteadof hi;
        hi::sayhello as hihello;
    }

}

$obj = new base();
$obj->newhello();
echo "</br>";
$obj->hihello();
?>