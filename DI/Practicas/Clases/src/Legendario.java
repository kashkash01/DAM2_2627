public class Legendario implements Brawler {
    private String nombre;
    private int vida;
    private int potencia;
    private int copas;

    public Legendario(String nombre, int vida, int potencia, int copas) {
        this.nombre = nombre;
        this.vida = vida;
        this.potencia = potencia;
        this.copas = copas;
    }
    @Override
    public void atacar() {
        System.out.println(nombre + " ataca con su ulti y hace " + potencia + " de daño.");
    }
    @Override
    public void recargar() {
        System.out.println(nombre + " recarga (Vida actual: " + vida + " HP).");
    }
}