package EJERCICIOSJAVA;

public class Index {
    public static void main(String[] args) {
        System.out.println("Driving license course ");
        System.out.println();  

        String selectedLicense = "LicenseB";
        System.out.println("Select a: " + selectedLicense);
        System.out.println();

          Student student = new Student("Juan", "Pérez", "123456789", "Calle 123", "987654321", "O+");
          System.out.println("Student Details:");
          System.out.println("Name: " + student.getName() + " " + student.getLastName());
          System.out.println("ID: " + student.getIdentification());
          System.out.println("Address: " + student.getAddress());
          System.out.println("Phone: " + student.getTelephone());
          System.out.println("Blood Type: " + student.getRH());
          System.out.println();
          

        

        if (selectedLicense.equals("LicenseA")) {
            LicenseA licenseA = new LicenseA();
            System.out.println("Name: " + licenseA.getPrice());
            System.out.println("Duration: " + licenseA.getDuration() + " Meses");
            System.out.println("Type: " + licenseA.getType());
            System.out.println();
        } else if (selectedLicense.equals("LicenseB")) {
            LicenseB licenseB = new LicenseB();
            System.out.println("Name: " + licenseB.getPrice());
            System.out.println("Duration: " + licenseB.getDuration() + " Meses");
            System.out.println("Type: " + licenseB.getType());
            System.out.println();
        } else {
            LicenseC licenseC = new LicenseC();
            System.out.println("Name: " + licenseC.getPrice());
            System.out.println("Duration: " + licenseC.getDuration() + " Meses");
            System.out.println("Type: " + licenseC.getType());
        }
    }
}