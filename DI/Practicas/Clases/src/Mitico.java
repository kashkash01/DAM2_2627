public class Mitico implements Brawler {
    private String nombre;
    private int vida;
    private int potencia;

    public Mitico(String nombre, int vida, int potencia) {
        this.nombre = nombre;
        this.vida = vida;
        this.potencia = potencia;
    }
    @Override
    public void atacar() {
        System.out.println(nombre + " lanza un ataque especial causando " + potencia + " de daño.");
    }
    @Override
    public void recargar() {
        System.out.println(nombre + " canaliza energía para recargar (Vida actual: " + vida + " HP).");
    }
}