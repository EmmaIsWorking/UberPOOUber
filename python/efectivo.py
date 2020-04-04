from account import Account

class Efectivo(Account):

    def __init__(self, name, mail, password):
        super().__init__(name, mail, password)

