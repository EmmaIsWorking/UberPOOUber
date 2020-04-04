<?php
require_once("Account.php");
require_once("Car.php");
require_once("UberX.php");
require_once("UberPool.php");

print "Ejercicio PHP #3\n";

$uberX = new UberX("KLA908",new Account("Emmanuel García","1991NOV24"),"Volkswagen", "Beetle GSR 1973");
$uberX->printDataCar();

// $uberBlack = new UberBlack("PI31416",new Account("Lisa Brandau","07JUL1981"), "BMW","Piel");
// $uberPool->printDataCar();