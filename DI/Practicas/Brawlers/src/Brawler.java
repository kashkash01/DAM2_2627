public abstract class Brawler {

    //Atributos privados comunes a cualquier brawler
    private String name;
    private int health;

    //Constructor para iniciar el nombre y la salud inicial de cualquier subclase
    public Brawler(String name, int health) {
        this.name = name;
        this.health = health;
    }

    //Metodo getter para obtener el nombre del brawler
    public String getName() {
        return name;
    }

    //Metodo getter para consultar la vida actual del brawler
    public int getHealth() {
        return health;
    }

    //Metodo para restar vida al brawler cuando recibe daño
    public void reduceHealth(int damage) {
        this.health -= damage;
    }

    //Metodo para sumar vida al brawler cuando se cura o recibe suministros
    public void increaseHealth(int supply) {
        this.health += supply;
    }

    //define la acción en combate
    public abstract void actionByCategory(Brawler target);

    //muestra el formato de salida requerido: [Nombre:Vida]
    @Override
    public String toString() {
        return "[" + name + ":" + health + "]";
    }
}