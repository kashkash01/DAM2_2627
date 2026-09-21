public class Legendario implements Brawler {
    private String nombre;
    private int vida;
    private int potencia;

    public Legendario(String nombre, int vida, int potencia) {
        this.nombre = nombre;
        this.vida = vida;
        this.potencia = potencia;
    }

    public String getNombre() { return nombre; }
    public int getVida() { return vida; }
    public int getPotencia() { return potencia; }

    @Override
    public void atacar() {
        System.out.println(nombre + " [Legendario] ataca con una potencia de " + potencia + " de daño.");
    }

    @Override
    public void recargar() {
        System.out.println(nombre + " recupera munición rápidamente (Vida actual: " + vida + " HP).");
    }
}