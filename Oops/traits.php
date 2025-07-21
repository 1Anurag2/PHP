<?php
trait A {
    public function info() {
        echo "This is an info method in trait A";
    }
}

class B {
    use A;
}
class C extends B {
    public function show() {
        echo "Hello from class C";
    }
}
$c = new C();
$c->show();
$c->info();
?>