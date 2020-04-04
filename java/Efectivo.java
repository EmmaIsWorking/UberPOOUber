class Efectivo extends Payment {
    Integer id;

    public Efectivo(Account name, String mail, String password, Integer id) {
        super(name, mail, password);
        this.id = id;
    }

}