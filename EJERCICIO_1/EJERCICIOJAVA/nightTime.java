package EJERCICIOJAVA;

public class nightTime extends bonus {
    public nightTime(salaryBass salary, double porcentage, int days) {
        super(salary, 1.75, days); 
    }

    public double calculateBonus() {
        return valueDay * percentage * days; 
    }
 }
