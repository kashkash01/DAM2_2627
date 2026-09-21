public class Main {
    public static void main(String[] args) {
        //Legendarios
        Legendario leon = new Legendario("Leon", 3200, 960, 1200);
        Legendario spike = new Legendario("Spike", 2800, 1120, 1234);

        //Mticos
        Mitico mortis = new Mitico("Mortis", 3800, 900, 1000);
        Mitico tara = new Mitico("Tara", 3400, 840, 764);

        //Epicos
        Epico piper = new Epico("Piper", 2400, 1500, 657);
        Epico edgar = new Epico("Edgar", 3000, 1000, 498);

        Brawler[] brawlers = { leon, spike, mortis, tara, piper, edgar };

        for (Brawler b : brawlers) {
            b.atacar();
            b.recargar();
            System.out.println();
        }
    }
}