package EJERCICIOJAVA;

public class rouster {
    private double calculate;

    public rouster(double totalBonus,  double totaldiscount, salaryBass salary) {

        this.calculate = totalBonus - totaldiscount + salary.calculateSalary();  //Assuming calculateSalary exists in salaryBass
    }

    public double calculateRouster() {
        return this.calculate;
    }
}