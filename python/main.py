from car import Car
from account import Account

if __name__ == "__main__":
    print("Objetos en Python")
    car = Car('ADSJ12', Account('Emmanuel Garcia', 'H29S788987KNB'))
    print(vars(car))

    car2 = Car('LJ82LKJ', Account('Edoardo Llanas', 'ASDLKJF908AD '))
    print(vars(car2))
