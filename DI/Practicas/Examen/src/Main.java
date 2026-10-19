import java.util.ArrayList;

public class Main {

    private final static ArrayList<Vehiculo> vehiculos = new ArrayList<>();

    public static void main(String[] args) {
        vehiculos.add(new Coche("Ford", 430000, "rojo"));
        vehiculos.add(new Furgoneta("Opel", 100000));
        vehiculos.add(new Coche("BMW", 20000, "negro"));

        int opcion, kilometros;
        String marca, color;
        boolean vehiculoFound;

        while (true) {
            vehiculoFound = false;

            System.out.println("1. Ver vehículos\n2. Crear coche\n3. Conducir vehículo por marca\n4. Salir");
            opcion = Utils.readInt("OPCIÓN: ");
            System.out.println();

            if (opcion == 4) {
                break;

            } else if (opcion == 1) {
                if (vehiculos.size() == 0) {
                    System.out.println("Todavía no hay vehículos creados...");
                } else {
                    for (Vehiculo vehiculo : vehiculos) {
                        System.out.println(vehiculo);
                    }
                }

            } else if (opcion == 2) {
                marca = Utils.readString("Marca del coche: ");
                kilometros = Utils.readInt("Kilómetros del coche: ");
                color = Utils.readString("Color: ");

                vehiculos.add(new Coche(marca, kilometros, color));

            } else if (opcion == 3) {
                marca = Utils.readString("Marca a buscar: ");

                for (Vehiculo vehiculo : vehiculos) {
                    if (vehiculo.getMarca().equals(marca)) {
                        vehiculoFound = true;
                        vehiculo.actionByVehiculoType();
                        break;
                    }
                }

                if (!vehiculoFound) System.out.println("No se ha encontrado ningún vehículo de esa marca...");

            } else {
                System.out.println("Opción incorrecta");
            }

            System.out.println();
        }
    }
}
