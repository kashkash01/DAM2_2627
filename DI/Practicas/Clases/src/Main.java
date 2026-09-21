public class Main {
    public static void main(String[] args) {
        //Legendarios
        Legendario leon = new Legendario("Leon", 3200, 960);
        Legendario spike = new Legendario("Spike", 2800, 1120);

        //Míticos
        Mitico mortis = new Mitico("Mortis", 3800, 900);
        Mitico tara = new Mitico("Tara", 3400, 840);

        //Épicos
        Epico piper = new Epico("Piper", 2400, 1500);
        Epico edgar = new Epico("Edgar", 3000, 1000);

        Brawler[] brawlers = { leon, spike, mortis, tara, piper, edgar };

        for (Brawler b : brawlers) {
            b.atacar();
            b.recargar();
            System.out.println();
        }
    }
}