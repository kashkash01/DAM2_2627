public class Epico extends Brawler {
    private int suministros;

    public Epico(String name, int health, int suministros) {
        super(name, health);
        this.suministros = suministros;
    }

    public int getSuministros() {
        return suministros;
    }

    @Override
    public void actionByCategory(Brawler target) {
        increaseHealth(suministros);
        System.out.println(this + " Increase health to " + getHealth());
        System.out.println(target);
    }
}