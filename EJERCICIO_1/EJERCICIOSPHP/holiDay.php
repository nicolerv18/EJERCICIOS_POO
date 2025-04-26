<?php

class Holiday extends Bonus {
    public function __construct(SalaryBass $salaryBass, $percentage, $days) {
        parent::__construct($salaryBass, 2.00, $days); // Fixed percentage of 2.00 for holidays
    }

    public function calculateBonus() {
        return $this->valueDay * $this->percentage * $this->days; // Calculate the bonus
    }
}

?>