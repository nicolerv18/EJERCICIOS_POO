<?php
class TrhidLaw extends NewtonsLaw{
    private $acction;

    public function __construct($acction){
        parent::__construct("Third Law of Motion", "Newton's third law states that for every action, there is an equal and opposite reaction." );
        $this->acction = $acction;
    }
      public function getAction(){
        return $this->acction;
      }

      public function calculateLaw(){
        return $this->acction * (-1);
    }

}
?>