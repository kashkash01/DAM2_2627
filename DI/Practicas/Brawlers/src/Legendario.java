public class Legendario extends Brawler {

    //Atributo específico de la clase Legendario para almacenar el valor de ataque
    private int damage;

    //Constructor que recibe el nombre, la salud inicial y el daño
    public Legendario(String name, int health, int damage) {
        //Llama al constructor de la clase padre para iniciar 'name' y 'health'
        super(name, health);
        this.damage = damage;
    }

    //Metodo para consultar el daño desde fuera
    public int getDamage() {
        return damage;
    }

    //Implementa el metodo abstracto de Brawler para definir su comportamiento en combate
    @Override
    public void actionByCategory(Brawler target) {
        //Resta la cantidad de daño a la vida del brawler rival llamando al metodo encapsulado de Brawler
        target.reduceHealth(damage);
        System.out.println(this + " Apply -" + damage + " damage to " + target.getName());
        System.out.println(target);
    }
}