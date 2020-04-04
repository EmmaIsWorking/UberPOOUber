class Tarjeta extends Payment {

    constructor(name, mail, password, cardNumber, cvv, dueDate) {
        super(name, mail,password)
        this.id
        this.cardNumber = cardNumber
        this.cvv = cvv
        this.dueDate = dueDate
    }
}