package EJERCICIOJAVA;

public class arl extends discount {
    private int risk;

    public arl(salaryBass salary, int risk) {
        super(salary, obtenerPorcentajePorRiesgo(risk));
        this.risk = risk;
    }

    private static double obtenerPorcentajePorRiesgo(int risk) {
        switch (risk) {
            case 1:
                return 0.0025;
            case 2:
                return 0.0050;
            case 3:
                return 0.0075;
            default:
                throw new IllegalArgumentException("Nivel de riesgo inválido");
        }
    }

    @Override
    public double calculateDiscount() {
        return salary.calculateSalary() * percentage;
    }

    public int getRisk() {
        return risk;
    }
}