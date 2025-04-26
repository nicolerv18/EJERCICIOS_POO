package EJERCICIOSJAVA;

class FirstLaw extends NewtonsLaw {
    private double force;

    public FirstLaw(double force) {
        super("First Law of Motion", "Newton's first law states that an object remains in its state until an external force moves it.");
        this.force = force;
    }

    public double getForce() {
        return this.force;
    }

    @Override
    public double calculateLaw() {
        // For the first law, we can return the force value as it determines the state of motion.
        return this.force;
    }

    public String calculate() {
        if (this.force == 0) {
            return "The object is at rest.";
        } else {
            return "The object is accelerating due to the net external force acting on it.";
        }
    }
}