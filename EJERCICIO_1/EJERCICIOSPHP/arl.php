<?php

class Arl extends Discount {
    private $risk;

    public function __construct(SalaryBass $salary, $risk) {
        $this->risk = $risk;
        switch ($risk) {
            case 1:
                $percentage = 0.025;
                break;
            case 2:
                $percentage = 0.05;
                break;
            case 3:
                $percentage = 0.075;
                break;
            default:
                throw new Exception("Invalid risk level");
        }
        parent::__construct($salary, $percentage);
    }

    public function calculateDiscount(): float {
        return $this->salaryBass->calculateSalary() * $this->percentage;
    }

    public function getRisk(): int {
        return $this->risk;
    }
}
?>