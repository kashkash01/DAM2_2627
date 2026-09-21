public class Legendario implements Brawler {
    private String nombre;

    public Legendario(String nombre) {
        this.nombre = nombre;
    }

    public String getNombre() {
        return nombre;
    }

    @Override
    public void atacar() {
        System.out.println(nombre + " lanza un ataque legendario.");
    }

    @Override
    public void recargar() {
        System.out.println(nombre + " recarga munición.");
    }
}