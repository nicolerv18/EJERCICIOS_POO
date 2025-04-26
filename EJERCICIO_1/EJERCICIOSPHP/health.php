<?php

class Health extends Discount {
    public function __construct(SalaryBass $salaryBass, $percentage) {
        parent::__construct($salaryBass, 0.04); // Pass percentage to the parent constructor
    }

    public function calculateDiscount() {
        return $this->salaryBass->calculateSalary() * $this->percentage; // Corrected calculation
    }
}

?>
