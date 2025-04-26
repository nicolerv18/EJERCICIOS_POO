<?php
class NightTime extends Bonus {
    public function __construct(SalaryBass $salaryBass, $percentage, $days) {
        parent::__construct($salaryBass, 1.75, $days); // Fixed percentage of 1.75 for night hours
    }

    public   function calculateBonus() {
        return $this->valueDay * $this->percentage * $this->days; // Calculate the bonus
    }
}
?>