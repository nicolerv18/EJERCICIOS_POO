package EJERCICIOSJAVA;
class SecondLaw extends NewtonsLaw {
    private double force;
    private double mass;
    private double acceleration;

    public SecondLaw(double force, double mass, double acceleration) {
        super("Second Newton's Law", "Newton's second law states that the force applied to an object is directly proportional to the acceleration the object acquires.");
        this.force = force;
        this.mass = mass;
        this.acceleration = acceleration;
    }

    public double getForce() {
        return this.force;
    }

    public double getMass() {
        return this.mass;
    }

    public double getAcceleration() {
        return this.acceleration;
    }

    public double calculateLaw() {
        return this.force = this.mass * this.acceleration;
    }
}
