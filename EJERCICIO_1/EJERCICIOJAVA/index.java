package EJERCICIOJAVA;

public class index {
    public static void main(String[] args) {

        person person = new person("Juan", "Pérez", "Developer");
        System.out.println("Name: " + person.getName() + " " + person.getLastName() + ", Position: " + person.getAppointment()); ;


        salaryBass salary = new salaryBass(80000, 30);
        System.out.println("Base Salary: " + salary.calculateSalary());
        if (salary.calculateSalary() < 3274050) {
            System.out.println("The salary is less than 3274050, the transportation subsidy of 1423500 is added.");
        } 

        else {
            System.out.println("The salary is greater than 3274050, the transportation subsidy of 0 is added.");
        }

        dayTime dayTime = new dayTime(salary, 1.25, 5);
        holiDay holiDay = new holiDay(salary, 2.00, 2);
        nightTime nightTime = new nightTime(salary, 1.75, 3);
        double totalBonus = bonus.calculateTotalBonus(dayTime, nightTime, holiDay);
        System.out.println("Total bonus: " + totalBonus);


        health health = new health(salary, 0.4);
        pension pension = new pension(salary, 0.4);
        arl arl = new arl(salary, 2);
        System.out.println("Nivel de riesgo: " + arl.getRisk());
        double totaldiscount = discount.calculateTotalDiscount(arl, health, pension);
        System.out.println("Total Discount: " +totaldiscount);


        rouster rouster = new rouster(totalBonus, totaldiscount, salary);
        System.out.println("Total Salary: " + rouster.calculateRouster());
    }
}  