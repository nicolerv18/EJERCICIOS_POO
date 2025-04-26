<?php
class Student{
    protected $name;
    protected $lastName;
    protected $identification;
    protected $address;
    protected $telephone;
    protected $RH;

    public function __construct($name, $lastName, $identification, $address, $telephone, $RH){
        $this->name = $name;
        $this->lastName = $lastName;
        $this->identification = $identification;
        $this->address = $address;
        $this->telephone = $telephone;
        $this->RH = $RH;
 }

 public function getName(){
    return $this->name;
}

public function getLastName(){
    return $this->lastName;
}

public function getIdentification(){
    return $this->identification;
}

public function getAddress(){
    return $this->address;
}

public function getTelephone(){
    return $this->telephone;
}

public function getRH(){
    return $this->RH;
}

}
?>