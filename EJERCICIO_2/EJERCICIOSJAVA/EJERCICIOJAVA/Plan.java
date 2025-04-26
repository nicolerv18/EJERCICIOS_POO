package EJERCICIOJAVA;
public class Plan {
    private String type;
    private double price;
    private String services;

    public Plan(String type, double price, String services) {
        this.type = type;
        this.price = price;
        this.services = services;
    }

    public String getType() {
        return type;
    }

    public double getPrice() {
        return price;
    }

    public String getServices() {
        return services;
    }
}