public abstract class Vehiculo {

    private final String marca;
    private int kilometros;

    public Vehiculo(String marca, int kilometros) {
        this.marca = marca;
        this.kilometros = kilometros;
    }

    public String getMarca() {
        return marca;
    }

    public int getKilometros() {
        return kilometros;
    }

    @Override
    public String toString() {
        return String.format("%s:%d km", marca, kilometros);
    }

    public abstract void actionByVehiculoType();

}
