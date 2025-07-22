<?php
namespace Mynamespace;
echo "Line Number : ".__LINE__ . "<br>";
echo "File Name : ".__FILE__ . "<br>";  
echo "Directory Name : ".__DIR__ . "<br>";
// echo "Current Time : ".__TIME__ . "<br>";
// echo "Current Date : ".__DATE__ . "<br>";   
echo "Namespce : ".__NAMESPACE__. "<br>";

trait mytrait{
    public function gettraitname(){
        echo "Trait Name : ".__TRAIT__. "<br>";
    }
}
function getFunctionName(){
    echo "Function Name : ".__FUNCTION__ . "<br>";
}

class Magic_constrants{
    use mytrait;
    public function getclassName(){
        echo "Class Name : ".__CLASS__ . "<br>";
        echo "Method Name : ".__METHOD__ . "<br>";
    }
}

$obj = new Magic_constrants();
$obj->getclassName();
$obj->gettraitname();
getFunctionName();
?>
