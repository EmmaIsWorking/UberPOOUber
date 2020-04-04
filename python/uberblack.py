from account import Account
class uberBlack:
    typeCarAccepted = []
    seatsMaterial   = []

    def __init__(self, license, driver, typeCarAccepted, seatsMaterial):
        super().__init__(self, license, driver)
        self.typeCarAccepted = typeCarAccepted
        self.seatsMaterial = seatsMaterial
