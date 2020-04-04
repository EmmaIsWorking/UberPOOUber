var car = new Car('09AJSDH', new Account('Emmanuel García', 'SDFLJ234'))
car.passenger = 4

car.printDataCar()

var uberX = new UberX ('SA987KJ', new Account('Lisa Bradau', 'LKJA982JKH'),"VolksWagen",'Vocho')
uberX.printDataCar()
console.log(uberX.model, uberX.brand);


var uberBlack = new UberBlack ('O7SJ92', new Account('Emmanuel García', 'SDF92KJHA6'),['BMW','Mercedes','Audi'], 'Piel')
uberBlack.printDataCar()
console.log(uberBlack.tyCardAccepted, uberBlack.seatsMaterial);