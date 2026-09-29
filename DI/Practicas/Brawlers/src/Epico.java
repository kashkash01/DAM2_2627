public class Epico extends Brawler {
    //Atributo especifico de la clase Epico para almacenar el valor de supply
    private int supply;

    //Constructor que recibe el nombre, salud y el supply
    public Epico(String name, int health, int supply) {
        //Llama al constructor de la clase padre para iniciar 'name' y 'health'
        super(name, health);
        this.supply = supply;
    }
    //Metodo para consultar el supply desde fuera
    public int getSuministros() {
        return supply;
    }

    //Implementa el metodo abstracto del Brawler para definir su comportamiento en combate
    @Override
    public void actionByCategory(Brawler target) {
        //Incrementa la cantidad de vida del brawler llamando al metodo encapsulado del brawler
        increaseHealth(supply);
        System.out.println(this + " Increase health to " + getHealth());
        System.out.println(target);
    }
}