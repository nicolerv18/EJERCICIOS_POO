<?php
class License{
    private $price;
    private $duration;
    private $type;

    public function __construct( $price, $duration, $type ){
        $this->price = $price;
        $this->duration = $duration;
        $this->type = $type;
    }

    public function getPrice(){
        return $this->price;
    }
    public function getDuration(){
        return $this->duration;
    }
    public function getType(){
        return $this->type;
    }
}
?>