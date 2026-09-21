public class Epico implements Brawler {
    private String nombre;
    private int vida;
    private int potencia;

    public Epico(String nombre, int vida, int potencia) {
        this.nombre = nombre;
        this.vida = vida;
        this.potencia = potencia;
    }
    @Override
    public void atacar() {
        System.out.println(nombre + " dispara infligiendo " + potencia + " de daño.");
    }
    @Override
    public void recargar() {
        System.out.println(nombre + " recarga su arma (Vida actual: " + vida + " HP).");
    }
}