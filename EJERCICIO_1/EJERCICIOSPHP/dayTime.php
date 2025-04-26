<?php
class DayTime extends Bonus {
    public function __construct(SalaryBass $salaryBass, $percentage, $days) {
        parent::__construct($salaryBass, 1.25, $days); 
    }

    public function calculateBonus() {
        return $this->valueDay * $this->percentage * $this->days; 
    }
}

?>