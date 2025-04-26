package EJERCICIOJAVA;
public   class salaryBass  {
    private double valueDay;
    public int workDay;
    private double calculate;
    private int additional;

    public salaryBass( double valueDay, int workDay) {
        this.valueDay = valueDay;
        this.workDay = workDay;
    }

    public double getValueDay() {
        return valueDay;
    }
    
    public int getWorkDay() {
        return workDay;
    }
    public double calculateSalary() {
        this.calculate = this.valueDay * this.workDay;
        if (calculate < 3274050) {
            this.calculate = this.calculate + additional;
        } 
        return this.calculate; 
    }
}