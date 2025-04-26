package EJERCICIOJAVA;

public class holiDay extends bonus {
    public holiDay(salaryBass salary, double  porcentage , int days) {
        super(salary, 2.00, days); 
    }

    public double calculateBonus() {
        return valueDay * percentage * days; 
    }
}