<?php
class Person {
    private string $name;
    private int $age;
    private float $high;
    private float $weight;

    public function __construct($name, $age, $high, $weight) {
        $this->name = $name;   
        $this->age = $age;     
        $this->high = $high;   
        $this->weight = $weight; 
    }

    public function getName() {
        return $this->name; 
    }

    public function getAge() {
        return $this->age; 
    }

    public function getHigh() {
        return $this->high; 
    }

    public function getWeight() {
        return $this->weight; 
    }
}
?>