

public abstract class Vehiculo {

    private final String nombre;
    private final String marca;
    private final String color;
    private int kilometros;

    public Vehiculo(String name, String marca, String color, int kilometros) {
        this.nombre = name;
        this.marca = marca;
        this.color = color;
        this.kilometros = kilometros;
    }

    public String getNombre() {
        return nombre;
    }

    public String getMarca() {
        return marca;
    }
    public String getColor() {
        return color;
    }

    public int getKilometros() {
        return kilometros;
    }
     public String toString() {
        return String.format("[%s:%d km]", nombre, kilometros);
     }
     public abstract void actionByVehiculoType();

}
