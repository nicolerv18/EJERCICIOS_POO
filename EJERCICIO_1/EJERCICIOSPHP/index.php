<?php
include_once 'autoload.php';

class Index {
    public static function main($args) {
        $employee = new employee("Juan", "Pérez", "Developer");
        echo "Name: " . $employee->getName() . " " . $employee->getLastName() . ", Position: " . $employee->getAppointment() . "\n";
        echo "<br>";

        $salaryBass = new SalaryBass(80000, 30);
        echo "Bass Salary: " . $salaryBass->calculateSalary() . "\n";
        echo "<br>";
        if ($salaryBass->calculateSalary() < 3274050) {
            echo "The salary is less than 3274050, the transportation subsidy of 1423500 is added.\n";
        } else {         
            echo "The salary is greater than 3274050, the transportation subsidy of 0 is added.\n";
        }
        echo "<br>";

        $dayTime = new DayTime($salaryBass, 1.25, 5);
        $holiday = new Holiday($salaryBass, 2.00, 2);
        $nightTime = new NightTime($salaryBass, 1.75, 3);
        $totalBonus = Bonus::calculateTotalBonus($dayTime, $nightTime, $holiday);

        echo "Total bonus: " . $totalBonus . "\n";
        echo "<br>";

        $health = new Health($salaryBass, 0.4);
        $pension = new Pension($salaryBass, 0.4);
        $arl = new Arl($salaryBass, 1);  
        echo "Nivel de riesgo: " . $arl->getRisk() . "\n";
        echo "<br>";
        $totalDiscount = Discount::calculateTotalDiscount($arl, $health, $pension);
        echo "Total Discount: " . $totalDiscount . "\n";
        echo "<br>";

        $roster = new Rouster( $totalBonus, $totalDiscount, $salaryBass);
        echo "Total Salary: " . $roster->calculateRouster() . "\n";
    }
}

Index::main([]);
?>     