import java.sql.Date;

class Tarjeta extends Payment {
    Integer id;
    Integer cardNumber;
    Integer CVV;
    Date dueDate;
    public Tarjeta(Account name, String mail, String password, Integer id,
    Integer cardNumber,Integer CVV,Date dueDate){
        super(name, mail, password);
        this.id = id;
        this.cardNumber = cardNumber;
        this.CVV = CVV;
        this.dueDate = dueDate
    }
}