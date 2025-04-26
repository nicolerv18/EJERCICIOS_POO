<?php


abstract class Bonus {
    protected $percentage; // Porcentaje de bonificación
    protected $days;       // Días trabajados
    protected $valueDay;  

    public function __construct(SalaryBass $salaryBass, $percentage, $days) {
        $this->valueDay = $salaryBass->getValueDay(); // Obtener el valor diario desde SalaryBass
        $this->percentage = $percentage;
        $this->days = $days;
    }

    abstract public function calculateBonus();

    public static function calculateTotalBonus($dayTime, $nightTime, $holiday) {
        return $dayTime->calculateBonus() + $nightTime->calculateBonus() + $holiday->calculateBonus();
    }

}




?>

