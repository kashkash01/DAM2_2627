public class Main {
    public static void main(String[] args) {
        Legendario leon = new Legendario("Leon");
        Legendario spike = new Legendario("Spike");

        Mitico mortis = new Mitico("Mortis");
        Mitico tara = new Mitico("Tara");

        Epico piper = new Epico("Piper");
        Epico edgar = new Epico("Edgar");

        Brawler[] brawlers = { leon, spike, mortis, tara, piper, edgar };
        for (Brawler brawler : brawlers) {
            brawler.atacar();
            brawler.recargar();
            System.out.println("----------------------");
        }
    }
}
