<?php

class Plan {
    private $type;
    private $price;
    private $services;

    public function __construct($type, $price, $services) {
        $this->type = $type;
        $this->price = $price;
        $this->services = $services;

    }
    

    public function getType() {
        return $this->type;
    }

    public function getPrice(){
        return $this->price;
    }
    public function getServices(){
        return $this->services;
    }
}

    ?>