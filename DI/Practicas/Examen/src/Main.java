import java.util.ArrayList;

public class Main {

    private static ArrayList<Vehiculo> vehiculos = new ArrayList<>();

    public static void main(String[] args) {
        int opcion, kilometros;
        String nombre,marca, color;
        boolean vehiculoFound;


        while (true) {
            vehiculoFound = false;

            System.out.println("1. Ver vehiculos\n2. Crear coche\n3. Conducir vehiculo por marca\n4. Salir");
            opcion = Utils.readInt("OPCION: ");
            System.out.println();

            if (opcion == 5) break;

            else if(opcion == 1) {
                if (vehiculos.size() == 0) System.out.println("No hay vehiculos");
                else {
                    for (Vehiculo vehiculo : vehiculos) {
                        System.out.println(vehiculo);
                    }
                }
            }else if (opcion == 2){
                nombre = Utils.readString("Nombre: ");
                marca = Utils.readString("Marca: ");
                color = Utils.readString("Color: ");
                kilometros = Utils.readInt("Kilometros: ");

                vehiculos.add(new Coche(nombre,marca,color,kilometros));
            }else if (opcion == 3){
                nombre = Utils.readString("Nombre: ");
                marca = Utils.readString("Marca: ");
                color = Utils.readString("Color: ");
                kilometros = Utils.readInt("Kilometros: ");

                vehiculos.add(new Furgoneta(nombre,marca,color,kilometros));

            }else if (opcion == 4){
                marca = Utils.readString("Marca: ");
                for(Vehiculo vehiculo : vehiculos){
                    if(vehiculo.getMarca().equals(marca)){
                        vehiculoFound = true;
                        vehiculo.actionByVehiculoType();

                        break;
                    }
                }
            }

        }
    }



} 
