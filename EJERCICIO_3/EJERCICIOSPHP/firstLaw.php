<?php
class FirstLaw extends NewtonsLaw{
    private $force;

    private $calculate;

    public function __construct($force){
        parent::__construct("First Law of Motion", "Newton's first law states that an object remains in its state until an external force moves it." );
        $this->force =$force;

    }

    public function getForce(){
        return $this->force;
    }

    public function calculateLaw() {
        if ($this->force == 0) {
            return "The object is at rest.";
        } else {
            return "The object is accelerating due to the net external force.";
        }
    }
}
?>