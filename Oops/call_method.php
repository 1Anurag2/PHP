<?php
class Call_method
{
    private $fname;
    private $lname;
    private function show($fname , $lname)
    {
        $this->fname = $fname;
        $this->lname = $lname;
        echo "Hello from Call_method class, name is: " . $this->fname . $this->lname;
    }
    public function __call($method, $args)
    {
        if(method_exists($this, $method)) {
            return call_user_func_array([$this, $method], $args);
        }else{
            echo "This is non existing method";
        }
        // echo "This is a magic method __call in Call_method class which is used to handle calls to inaccessible methods. $method does not exist. $args[] is the first argument passed to the method.";
    }
}

$obj = new Call_method();
$obj->show("Anurag" , "Verma");
?>