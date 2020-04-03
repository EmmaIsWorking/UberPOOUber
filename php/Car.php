<?php 
require_once("Account.php");

class Car {
    private $id;
    public $license;
    public $driver;
    public $passenger;

    public function __constructor($license, Account $driver){

        $this->$license = $license;
        $this->driver = $name;
        $this->driver = $driver;
    }

    public function printDataCar(){
        print 'Licencia: ' .$this->license;
        print 'Nombre: ' .$this->driver->name;
        print 'Documento: ' .$this->driver->$document;
    }
}

