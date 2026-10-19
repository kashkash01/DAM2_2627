public class Coche extends Vehiculo {

    private final String color;

    public Coche(String marca, int kilometros, String color) {
        super(marca, kilometros);
        this.color = color;
    }

    @Override
    public void actionByVehiculoType() {
        System.out.printf("Coche %s de color %s con %d kilómetros - Viajando\n",
                this.getMarca(), color, this.getKilometros());
    }
}
