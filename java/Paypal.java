class Paypal extends Payment {
    Integer id;

    public Paypal(Account name, String mail, String password, Integer id) {
        super(name, mail, password);
        this.id = id;
    }

}