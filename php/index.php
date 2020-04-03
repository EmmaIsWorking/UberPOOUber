<?php
require_once("Account.php");
require_once("Car.php");

print "Ejercicio PHP #3\n";

$car = new Car(new Account("Emmanuel Garcia", "LKJAASD879213"));

$car->printDataCar();