public class Epico implements Brawler {
    private String nombre;

    public Epico(String nombre) {
        this.nombre = nombre;
    }

    public String getNombre() {
        return nombre;
    }

    @Override
    public void atacar() {
        System.out.println(nombre + " lanza un ataque epico.");
    }

    @Override
    public void recargar() {
        System.out.println(nombre + " recarga munición.");
    }
}