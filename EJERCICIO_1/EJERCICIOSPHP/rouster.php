<?php
class Rouster {
    private $calculatedValue;

    public function __construct($totalBonus, $totalDiscount, SalaryBass $salary) {
        $this->calculatedValue = $totalBonus - $totalDiscount + $salary->calculateSalary();  // Assuming calculateSalary exists in SalaryBase
    }

    public function calculateRouster() {
        return $this->calculatedValue;
    }
}
?>