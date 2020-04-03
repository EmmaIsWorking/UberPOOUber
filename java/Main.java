class Main {
    public static void main(String[] args) {
        Car car = new Car();
        car.license = "EMLI28";
        car.driver = "Emmanuel";
        car.passenger = 4;
        System.out.println("Licencia de manejo: " + car.license);

        Car car2 = new Car();
        car2.license = "JDSF8";
        car2.driver = "Llanas";
        car2.passenger = 4;
        System.out.println("Licencia de manejo" + car2.license);

    }
}