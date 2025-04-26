package EJERCICIOSJAVA;

class ThirdLaw extends NewtonsLaw {
    private double action;

    public ThirdLaw(double action) {
        super("Third Law of Motion", "Newton's third law states that for every action, there is an equal and opposite reaction.");
        this.action = action;
    }

    public double getAction() {
        return this.action;
    }

    public double calculateLaw() {
        return this.action * (-1);
    }
}