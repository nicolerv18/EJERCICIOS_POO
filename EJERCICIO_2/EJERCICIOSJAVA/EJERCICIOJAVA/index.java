package EJERCICIOJAVA;

public class index {
    public static void main(String[] args) {
        // Crear un objeto de la clase Person
        Person person = new Person( "Juan", 25, 1.75f, 70.0f);

        // Mostrar información de la persona
        System.out.println("Nombre: " + person.getName());
        System.out.println("Edad: " + person.getAge());
        System.out.println("Altura: " + person.getHeight() + " m");
        System.out.println("Peso: " + person.getWeight() + " kg");
        System.out.println();
        System.out.println("Seleccione el plan: ");
        System.out.println("Plan Básico ");
        System.out.println("Plan Medium ");
        System.out.println("Plan Premium ");

        String selectedPlanType = "Basic Plan";

        // Determinar el plan seleccionado
        Plan selectedPlan;
        if (selectedPlanType.equals("Basic Plan")) {  
            selectedPlan = new BasicPlan();
        } else if (selectedPlanType.equals("Premium Plan")) {
            selectedPlan = new PremiumPlan();
        } else if (selectedPlanType.equals("Medium Plan")) {
            selectedPlan = new MediumPlan(); 
        } else {
            System.out.println("Seleccione uno de los tres planes.");
            return;
        }

        System.out.println();
        System.out.println("<strong>Plan Seleccionado:</strong>");
        System.out.println("Plan Type: " + selectedPlan.getType());
        System.out.println("Price: $" + selectedPlan.getPrice());
        System.out.println("Services: " + selectedPlan.getServices());
    }
}