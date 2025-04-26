<?php
class Secondlaw extends NewtonsLaw{
    private $force;
    private $bulk;
    private $acceleration;

    private $calculate;

    public function __construct( & $force, $bulk, $acceleration){
        parent ::__construct("Second Newton´s law", "Newton's second law states that the force applied to an object is directly proportional to the acceleration the object adquires." );
        $this->force =$force;
        $this->bulk = $bulk;
        $this->acceleration = $acceleration;
    }

    public function get_force(){ 
        return $this->force;
    }

    public function get_bulk(){ 
        return $this->bulk;
    }

    public function get_acceleration(){
        return $this->acceleration;
    }

    public function calculateLaw(){
        return $this->force = $this->bulk * $this->acceleration; 
    }

}
?>