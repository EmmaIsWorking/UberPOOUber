class Main {
    public static void main(String[] args) {
        System.out.println("Hola Mundo");
        UberX uberX = new UberX("JHA8892", new Account("Emmanuel García", "183098JLKAD"), "VolksWagen", "Vocho");
        uberX.setPassenger(4);
        uberX.printDataCar();
        // Car car2 = new Car("HJK34", new Account("Edoardo Llanas", "LKHJA451SD90"));
        // System.out.println("Nombre: " + car.driver.name + "Licencia de manejo" + car2.license);

    }
}