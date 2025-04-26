package EJERCICIOJAVA;

public class health extends discount {
    public health(salaryBass salary, double percentage) {
        super(salary,0.04); 
    }

    @Override
    public double calculateDiscount() {
        return salary.calculateSalary() * percentage; 
    }
}