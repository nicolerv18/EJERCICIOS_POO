package EJERCICIOJAVA;

public class Person {
    private String name;
    private int age;
    private float height;
    private float weight;

    public Person(String name, int age, float height, float weight) {
        this.name = name;   
        this.age = age;     
        this.height = height;   
        this.weight = weight; 
    }

    public String getName() {
        return this.name; 
    }

    public int getAge() {
        return this.age; 
    }

    public float getHeight() {
        return this.height; 
    }

    public float getWeight() {
        return this.weight; 
    }
}