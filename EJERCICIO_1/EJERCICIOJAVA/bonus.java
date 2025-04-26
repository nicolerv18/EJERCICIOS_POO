package EJERCICIOJAVA;

public  abstract class bonus {
    protected double percentage; 
    protected int days;          
    protected double valueDay;  

    public bonus(salaryBass salary, double percentage, int days) {
        this.valueDay = salary.getValueDay(); 
        this.percentage = percentage;
        this.days = days;
    }

    public  abstract double calculateBonus()
     ;

    public static double calculateTotalBonus(dayTime dayTimeBonus, nightTime nightTimeBonus, holiDay holidayBonus) {
        return  dayTimeBonus.calculateBonus() + nightTimeBonus.calculateBonus() + holidayBonus.calculateBonus();
    }

    }
