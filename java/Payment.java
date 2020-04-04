class Payment {
    Integer id;
    Account name;
    String mail;
    String password;

    public Payment(Account name, String mail, String password){
        this.name = name;
        this.mail = mail;
        this.password =password;
    }

    void printInfoPayment(){
        System.out.println("Nombre: " + name.name + "," + "Correo: " + mail + "," + "Contraseña " + password);
    } 
}