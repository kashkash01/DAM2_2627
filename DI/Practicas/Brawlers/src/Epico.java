public class Epico extends Brawler {
    private int supply;

    public Epico(String name, int health, int suministros) {
        super(name, health);
        this.supply = suministros;
    }

    public int getSuministros() {
        return supply;
    }

    @Override
    public void actionByCategory(Brawler target) {
        increaseHealth(supply);
        System.out.println(this + " Increase health to " + getHealth());
        System.out.println(target);
    }
}