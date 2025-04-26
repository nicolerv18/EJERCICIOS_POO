package EJERCICIOJAVA;
public class person {
    private String name;
    private String lastName;
    private String appointment;

    public person(String name, String lastName, String appointment) {
        this.name = name;
        this.lastName = lastName;
        this.appointment = appointment;
    }

    public String getName() {
        return name;
    }

    public String getLastName() {
        return lastName;
    }

    public String getAppointment() {
        return appointment;
    }



    }
