import java.util.Scanner;

public class Utils {
    private static Scanner scanner = new Scanner(System.in);

    public static String readString( String message){
        System.out.println(message);
        return scanner.next();
    }
    public static int readInt( String message){
        System.out.println(message);
        return scanner.nextInt();
    }
}
