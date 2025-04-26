package EJERCICIOSJAVA;

public class Index {
    public static void main(String[] args) {
        System.out.println("Newton's Laws");
        System.out.println();

        String selectedClass = "SecondLaw";
        System.out.println("Select a: " + selectedClass);
        System.out.println();

      //Pirmera Ley
        if (selectedClass.equals("FirstLaw")) {
            FirstLaw firstLaw = new FirstLaw(10);
            System.out.println("Name: " + firstLaw.getName());
            System.out.println();
            System.out.println("Description: " + firstLaw.getDescription());
            System.out.println();
            System.out.println("Force: " + firstLaw.getForce());
            System.out.println();
            System.out.println( + firstLaw.calculateLaw());

            //Segunda Ley
        } else if (selectedClass.equals("SecondLaw")) {
            double force = 10.0; 
            SecondLaw secondLaw = new SecondLaw(force, 5, 2);
            System.out.println("Name: " + secondLaw.getName());
            System.out.println();
            System.out.println("Description: " + secondLaw.getDescription());
            System.out.println();
            System.out.println("Force: " + secondLaw.calculateLaw());
            System.out.println();


            //Tercera Ley
        } else {
            ThirdLaw trhidLaw = new ThirdLaw(10);
            System.out.println("Name: " + trhidLaw.getName());
            System.out.println();
            System.out.println("Description: " + trhidLaw.getDescription());
            System.out.println();
            System.out.println("Action: " + trhidLaw.getAction());
            System.out.println();
            System.out.println("Reaction: " + trhidLaw.calculateLaw());
            System.out.println();
        }
    }
}

