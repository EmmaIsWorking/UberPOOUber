from car import Car

if __name__ == "__main__":
    print("Objetos en Python")
    car = Car()
    car.license = "IOU87"
    car.driver = "Emmanuel García"
    print(vars(car))

    car2 = Car()
    car2.license = "87SJKH"
    car2.driver = "Llanas Meza"
    print(vars(car2))
