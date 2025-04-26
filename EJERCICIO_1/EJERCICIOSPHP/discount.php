<?php
abstract class Discount {
    protected $percentage; 
    protected $salaryBass;

    public function __construct($salaryBass, $percentage) {
        $this->salaryBass = $salaryBass; 
        $this->percentage = $percentage;
    }

    public abstract function calculateDiscount();

    public  static function calculateTotalDiscount($arlDiscount, $healthDiscount, $pensionDiscount) {
        return $arlDiscount->calculateDiscount() + $healthDiscount->calculateDiscount() + $pensionDiscount->calculateDiscount();
    }
}
?>

