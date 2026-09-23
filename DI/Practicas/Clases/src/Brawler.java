public abstract class Brawler {
    private String name;
    private int health;

    public Brawler(String name, int health) {
        this.name = name;
        this.health = health;
    }

    public String getName() {
        return name;
    }

    public int getHealth() {
        return health;
    }

    // Métodos para encapsular la salud y evitar get/set directos
    public void reduceHealth(int damage) {
        this.health -= damage;
    }

    public void increaseHealth(int supply) {
        this.health += supply;
    }

    // Acción polimórfica según la categoría
    public abstract void actionByCategory(Brawler target);

    @Override
    public String toString() {
        return "[" + name + ":" + health + "]";
    }
}