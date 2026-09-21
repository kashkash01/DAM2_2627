public class Mitico implements Brawler {
    private String nombre;

    public Mitico(String nombre) {
        this.nombre = nombre;
    }

    public String getNombre() {
        return nombre;
    }

    @Override
    public void atacar() {
        System.out.println(nombre + " lanza un ataque mitico.");
    }

    @Override
    public void recargar() {
        System.out.println(nombre + " recarga munición.");
    }
}