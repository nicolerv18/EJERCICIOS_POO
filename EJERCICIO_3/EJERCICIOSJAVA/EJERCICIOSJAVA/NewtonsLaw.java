package EJERCICIOSJAVA;
abstract class NewtonsLaw {
    private String name;
    private String description;

    public NewtonsLaw(String name, String description) {
        this.name = name;
        this.description = description;
    }

    public String getName() {
        return this.name;
    }

    public String getDescription() {
        return this.description;
    }

    public  abstract double calculateLaw() ;
}
