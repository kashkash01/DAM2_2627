import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        //List para guardar cualquier tipo de brawler (Legendario o Épico)
        List<Brawler> brawlers = new ArrayList<>();

        //Objeto Scanner para leer datos desde el teclado por consola
        Scanner teclado = new Scanner(System.in);

        //Es para controlar la opción seleccionada del menú
        int opcion = 0;

        //Es un bucle que se repetirá continuamente hasta que se puse la opción 5 (Salir)
        while (opcion != 5) {
            //Imprimimos el menú de opciones por consola
            System.out.println("1. Ver brawlers");
            System.out.println("2. Crear brawler legendario");
            System.out.println("3. Crear brawler épico");
            System.out.println("4. Combatir");
            System.out.println("5. Salir");
            System.out.println();

            //Leemos el número de la opción introducida por el usuario
            System.out.print("OPCION: ");
            opcion = teclado.nextInt();
            System.out.println();

            //Es opción elegida con un switch
            switch (opcion) {
                case 1:
                    //Si la lista está vacía, mostramos el mensaje de aviso
                    if (brawlers.size() == 0) System.out.println("Todavía no hay brawlers creados...");
                    else {
                        //Si hay personajes, recorremos la lista e imprimimos cada uno
                        for (Brawler b : brawlers) {
                            System.out.println(b);
                        }
                    }
                    break;

                case 2:
                    //Pedimos los datos específicos para un brawler de tipo Legendario
                    System.out.print("Nombre: ");
                    String nombreLegendrio = teclado.next();

                    System.out.print("Vida: ");
                    int vidaLegendaria = teclado.nextInt();

                    System.out.print("Daño: ");
                    int damage = teclado.nextInt();

                    //el objeto Legendario y lo añadimos a la lista
                    brawlers.add(new Legendario(nombreLegendrio, vidaLegendaria, damage));
                    break;

                case 3:
                    //Pedimos los datos específicos para un brawler de tipo Épico
                    System.out.print("Nombre: ");
                    String nombreEpico = teclado.next();

                    System.out.print("Vida: ");
                    int vidaEpico = teclado.nextInt();

                    System.out.print("Supply: ");
                    int supply = teclado.nextInt();

                    //el objeto Epico y lo añadimos a la lista
                    brawlers.add(new Epico(nombreEpico, vidaEpico, supply));
                    break;

                case 4:
                    //Solicitamos los nombres de los dos contendientes
                    System.out.print("Nombre del brawler 1: ");
                    String nom1 = teclado.next();

                    System.out.print("Nombre del brawler 2: ");
                    String nom2 = teclado.next();

                    //Variables temporales para guardar las referencias a los brawlers si los encontramos
                    Brawler b1 = null;
                    Brawler b2 = null;

                    //Recorremos la lista buscando si coinciden los nombres introducidos
                    for (Brawler b : brawlers) {
                        if (b.getName().equalsIgnoreCase(nom1)) b1 = b; //Asignamos el primer combatiente
                        if (b.getName().equalsIgnoreCase(nom2)) b2 = b; //Asignamos el segundo combatiente
                    }

                    //Validación: comprobamos si alguno de los dos no existe en la lista
                    if (b1 == null || b2 == null) System.out.println("Uno de los brawlers no se ha encontrado...");
                    else {
                        //Mostramos el estado inicial de ambos combatientes
                        System.out.println(b1);
                        System.out.println(b2);
                        System.out.println();

                        //Turno del Brawler 1: ejecuta su acción contra el rival (ataca o se cura según su tipo)
                        b1.actionByCategory(b2);
                        System.out.println();

                        //Turno del Brawler 2: responde con su propia acción
                        b2.actionByCategory(b1);
                    }
                    break;

                case 5:
                    //Opción de salida: no hace nada aquí porque el bucle 'while' terminará al comprobar la condición
                    break;
            }
            //Salto de línea estético entre opciones del menú, excepto cuando se va a salir
            if (opcion != 5) System.out.println();
        }
        //Cerramos el Scanner al terminar el programa para liberar recursos
        teclado.close();
    }
}