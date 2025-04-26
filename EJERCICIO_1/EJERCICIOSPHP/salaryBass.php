<?php
class SalaryBass {
    private $valueDay;
    public $workDays;
    private $calculatedValue;
    private $additionalValue;

    public function __construct($valueDay, $workDays) {
        $this->valueDay = $valueDay;
        $this->workDays = $workDays;
    }

    public function getValueDay(){
        return $this->valueDay;
    }
    
    public function getWorkDay() {
        return $this->workDays;
    }

    public function calculateSalary() {
        $this->calculatedValue = $this->valueDay * $this->workDays; 
        if ($this->calculatedValue < 3274050) {
            $this->calculatedValue += $this->additionalValue;
        } 
        return $this->calculatedValue; 
    }
    
}
?>