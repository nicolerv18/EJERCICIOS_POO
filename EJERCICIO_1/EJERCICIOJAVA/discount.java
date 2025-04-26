package EJERCICIOJAVA;

public  abstract class discount {
    protected double percentage; 
    protected salaryBass salary;  

    public discount(salaryBass salary, double percentage) {
        this.salary = salary; 
        this.percentage = percentage;

    }

    public  abstract double calculateDiscount()
     ;

    public static double calculateTotalDiscount(arl arlDiscount, health healthDiscount, pension pensionDiscount) {
        return arlDiscount.calculateDiscount() + healthDiscount.calculateDiscount() + pensionDiscount.calculateDiscount();
    }

    }




