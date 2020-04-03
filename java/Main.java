class Main {
    public static void main(String[] args) {
        Car car = new Car("EMLI28", new Account("Emmanuel García", "12JKH234GK"));
        car.passenger = 4;
        System.out.println("Nombre: " + car.driver.name +  "Licencia de manejo: " + car.license);

        Car car2 = new Car("HJK34", new Account("Edoardo Llanas", "LKHJA451SD90"));
        car2.passenger = 4;
        System.out.println("Nombre: " + car.driver.name + "Licencia de manejo" + car2.license);

    }
}