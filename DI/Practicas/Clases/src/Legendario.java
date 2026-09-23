public class Legendario extends Brawler {
    private int dano;

    public Legendario(String name, int health, int dano) {
        super(name, health);
        this.dano = dano;
    }

    public int getDano() {
        return dano;
    }

    @Override
    public void actionByCategory(Brawler target) {
        target.reduceHealth(dano);
        System.out.println(this + " Apply -" + dano + " damage to " + target.getName());
        System.out.println(target);
    }
}