import java.util.Scanner;
public class Calculadoraa {
    static void main (String[] args) {

        Scanner menu = new Scanner(System.in);

        //Opcnes
        System.out.println("1. Sumar");
        System.out.println("2. Restar");
        System.out.println("3. Multiplicar");
        System.out.println("4. Dividir");
        System.out.println("5. Salir");

        int opcion;

        do {
            System.out.println("OPCION: ");
            opcion = menu.nextInt();
            if (opcion == 5) break;
            if (opcion <1 || opcion >5) continue;

            //operadores
            System.out.println("NUMERO 1: ");
            int num1 = menu.nextInt();

            System.out.println("NUMERO 2: ");
            int num2 = menu.nextInt();

            switch (opcion) {
                case 1: int suma  = num1 + num2;
                    System.out.println(num1 + " + " + num2 + " = " + suma);
                    break;

                case 2: int resta  = num1 - num2;
                    System.out.println(num1 + " - " + num2 + " = " + resta);
                    break;

                case 3: int multiplicacion  = 0;
                    int veces  = Math.abs(num2);

                    //math.abs para que devuelva un absoluto y en caso de que sea negativo devuelva el msmo pero en positivo
                    for (int i = 1; i <= veces; i++) multiplicacion += Math.abs(num1);
                    System.out.println(num1 + " * " + num2 + " = " + multiplicacion);
                    break;

                case 4: if (num2 != 0){
                    int division  = num1/num2;
                    System.out.println(num1 + " / " + num2 + " = " + division);
                } else System.out.println("No s pude dividir");
                    break;


                case 5: System.out.println("Salir");
                    break;
            }
        }while (opcion != 5);
    }
}
