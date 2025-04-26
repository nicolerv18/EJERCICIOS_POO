package EJERCICIOJAVA;

public class pension extends discount {
    public pension(salaryBass salary, double percentage) {
        super(salary,0.04); // Pass percentage to the parent constructor
    }

    @Override
    public double calculateDiscount() {
        return salary.calculateSalary() * percentage; // Corrected calculation
    }
}