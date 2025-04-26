package EJERCICIOSJAVA;


public class Student {
    protected String name;
    protected String lastName;
    protected String identification;
    protected String address;
    protected String telephone;
    protected String RH;

    public Student(String name, String lastName, String identification, String address, String telephone, String RH) {
        this.name = name;
        this.lastName = lastName;
        this.identification = identification;
        this.address = address;
        this.telephone = telephone;
        this.RH = RH;
    }

    public String getName() {
        return name;
    }

    public String getLastName() {
        return lastName;
    }

    public String getIdentification() {
        return identification;
    }

    public String getAddress() {
        return address;
    }

    public String getTelephone() {
        return telephone;
    }

    public String getRH() {
        return RH;
    }
}