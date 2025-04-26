package EJERCICIOSJAVA;
public class License {
    private double price;
    private int duration;
    private String type;

    public License(double price, int duration, String type) {
        this.price = price;
        this.duration = duration;
        this.type = type;
    }

    public double getPrice() {
        return price;
    }

    public int getDuration() {
        return duration;
    }

    public String getType() {
        return type;
    }
}