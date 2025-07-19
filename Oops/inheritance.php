<?php

class Inheritance {
    public $name, $salary , $department;
    public function __construct($name, $salary, $department) {
        $this->name = $name;
        $this->salary = $salary;
        $this->department = $department;
    }

    public function employeeDetails() {
        return "Name: " . $this->name . ", Salary: " . $this->salary . ", Department: " . $this->department;
    }
}

class Manager extends Inheritance {
    public $teamSize;

    public function __construct($name, $salary, $department, $teamSize) {
        parent::__construct($name, $salary, $department);
        $this->teamSize = $teamSize;
    }

    public function managerDetails() {
        return parent::employeeDetails() . ", Team Size: " . $this->teamSize;
    }
}

$manager = new Manager("Alice", 75000, "IT", 10);
echo $manager->managerDetails();

?>