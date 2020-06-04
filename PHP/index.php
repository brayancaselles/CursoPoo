<?php

require_once 'car.php';
require_once 'uberX.php';
require_once 'account.php';
require_once 'uberPool.php';

$uberX = new UberX("cvas12312", new Account("ANdres HErrera", "asdh12321"), "Chevroled","Spark");
$uberX->printDataCar();

$uberPool = new UberX("cva212", new Account("Andrea Farram", "asdh12321"), "Chevroled","Spark");
$uberPool->printDataCar();
?>