<?php

require_once('car.php');
require_once('uberX.php');
require_once('uberPool.php');
require_once('account.php');
require_once('uberVan.php');

$uberX = new UberX("CVB123", new Account("Andres Herrera", "AND456"), "Chevrolet", "Spark");
$uberX->setPassenger(4);
$uberX->PrintDataCar();

$uberPool = new UberPool("LDS586", new Account("Andrea Ferran", "ANDA765"), "Dodge", "Attitude");
$uberPool->PrintDataCar();

$uberVan = new UberVan("OJL395", new Account("Raul Ramirez", "AND456"), "Nissan", "Versa");
$uberVan->setPassenger(6);
$uberVan->PrintDataCar();

?>