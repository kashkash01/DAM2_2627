import java.util.ArrayList;
import java.util.List;
import java.util.Scanner;

public class Main {
    public static void main(String[] args) {
        List<Brawler> brawlers = new ArrayList<>();
        Scanner teclado = new Scanner(System.in);
        int opcion;

        do {
            System.out.println("1.Ver brawlers");
            System.out.println("2.Crear brawler legendario");
            System.out.println("3.Crear brawler épico");
            System.out.println("4.Combatir");
            System.out.println("5.Salir");
            System.out.println();

            System.out.print("OPCION: ");
            opcion = Integer.parseInt(teclado.nextLine());
            System.out.println();

            switch (opcion) {
                case 1:
                    if (brawlers.isEmpty()) System.out.println("Todavía no hay brawlers creados...");
                    else {
                        for (Brawler b : brawlers) {
                            System.out.println(b);
                        }
                    }
                    break;

                case 2:
                    System.out.print("Nombre: ");
                    String nomLeg = teclado.nextLine();

                    System.out.print("Vida: ");
                    int vidLeg = Integer.parseInt(teclado.nextLine());

                    System.out.print("Daño: ");
                    int dano = Integer.parseInt(teclado.nextLine());

                    brawlers.add(new Legendario(nomLeg, vidLeg, dano));
                    break;

                case 3:
                    System.out.print("Nombre: ");
                    String nomEpi = teclado.nextLine();

                    System.out.print("Vida: ");
                    int vidEpi = Integer.parseInt(teclado.nextLine());

                    System.out.print("Suministros: ");
                    int sum = Integer.parseInt(teclado.nextLine());

                    brawlers.add(new Epico(nomEpi, vidEpi, sum));
                    break;

                case 4:
                    System.out.print("Nombre del brawler 1: ");
                    String nom1 = teclado.nextLine();

                    System.out.print("Nombre del brawler 2: ");
                    String nom2 = teclado.nextLine();

                    Brawler b1 = null;
                    Brawler b2 = null;

                    for (Brawler b : brawlers) {
                        if (b.getName().equalsIgnoreCase(nom1)) b1 = b;

                        if (b.getName().equalsIgnoreCase(nom2)) b2 = b;
                    }

                    if (b1 == null || b2 == null) System.out.println("Uno de los brawlers no se ha encontrado...");
                     else {
                        System.out.println(b1);
                        System.out.println(b2);
                        System.out.println();

                        b1.actionByCategory(b2);
                        System.out.println();

                        b2.actionByCategory(b1);
                    }
                    break;

                case 5:
                    break;
            }
            if (opcion != 5) System.out.println();
        } while (opcion != 5);

        teclado.close();
    }
}