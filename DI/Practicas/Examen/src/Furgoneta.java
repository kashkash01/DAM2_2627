public class Furgoneta extends Vehiculo {

    public Furgoneta(String marca, int kilometros) {
        super(marca, kilometros);
    }

    @Override
    public void actionByVehiculoType() {
        System.out.printf("Furgoneta %s con %d kilómetros - Transporta comida\n",
                this.getMarca(), this.getKilometros());
    }
}
