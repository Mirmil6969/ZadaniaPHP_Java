public class Person {

    private String imie;
    private String nazwisko;
    private double wiek;

    public Person(String imie, String nazwisko, double wiek){
        this.imie = imie;
        this.nazwisko = nazwisko;
        this.wiek = wiek;
    }

    public String getImie() {
        return imie;
    }

    public void setImie(String imie) {
        this.imie = imie;
    }

    public String getNazwisko() {
        return nazwisko;
    }

    public void setNazwisko(String nazwisko) {
        this.nazwisko = nazwisko;
    }

    public double getWiek() {
        return wiek;
    }

    public void setWiek(double wiek) {
        this.wiek = wiek;
    }
}
