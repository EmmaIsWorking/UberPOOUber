<?php
require_once("car.php");
require_once("uberX.php");
require_once("uberPool.php");
require_once("uberBlack.php");
require_once("account.php");

echo "Ejercicio PHP #3\n";

$uberX = new UberX("KLA908",new Account("Emmanuel García","1991NOV24"),"Volkswagen", "Beetle GSR 1973");
$uberX->printDataCar();

$uberBlack = new UberBlack("PI31416",new Account("Lisa Brandau","07JUL1981"), "BMW","Piel");

$uberBlack->printDataCar();