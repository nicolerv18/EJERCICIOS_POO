package EJERCICIOJAVA;

public class dayTime extends bonus {
    public dayTime( salaryBass salary, double Porcentage , int days) {
        super(salary, 1.25, days); 
    }

    public double calculateBonus() {
        return valueDay * percentage * days; 
    }
}