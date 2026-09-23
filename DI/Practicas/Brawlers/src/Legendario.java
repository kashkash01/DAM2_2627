public class Legendario extends Brawler {
    private int damage;

    public Legendario(String name, int health, int damage) {
        super(name, health);
        this.damage = damage;
    }

    public int getDamage() {
        return damage;
    }

    @Override
    public void actionByCategory(Brawler target) {
        target.reduceHealth(damage);
        System.out.println(this + " Apply -" + damage + " damage to " + target.getName());
        System.out.println(target);
    }
}