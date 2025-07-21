<?php

class Get_method
{
    public $data = ["name"=>"Anurag","course"=>"PHP","age"=>22];
    public function show()
    {
        echo "Show function \n";
    }
    public function __get($property)
    {
        if (array_key_exists($property, $this->data)) {
            return $this->data[$property]."\n";
        }
        else{
            echo "You are trying to access  private or non existing property($property) ";
        }
    }
}

$obj = new Get_method();
// $obj->show();
echo $obj->name;
echo $obj->course;
echo $obj->fee;

?>