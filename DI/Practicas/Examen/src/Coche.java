public class Coche extends Vehiculo{

    public Coche(String nombre,String marca, String color, int kilometros) {
        super(nombre, marca,color, kilometros);

    }

    @Override
    public void actionByVehiculoType() {
        System.out.printf("%s %s de color %s con %d kilometros ",
        this.getNombre(),this.getMarca(), this.getColor(),this.getKilometros());

    }
}
