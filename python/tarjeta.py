from account import Account

class Tarjeta(Account):
    cardNumber  = int
    cvv         = int
    dueDate     = int

    def __init__(self, name, mail, password,cardNumber, cvv, dueDate):
        super().__init__(name, mail, password)
        self.cardNumber = cardNumber
        self.cvv = cvv
        self.dueDate = dueDate


