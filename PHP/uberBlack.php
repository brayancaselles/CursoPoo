<?php
require_once('car.php');
class uberBlack extends Car{
    public $typeCarAccepted;
    public $seatsMaterial;

    public function __constructor($license, $driver,$typeCarAccepted, $seatsMaterial){
        parent::__constructor($license,$driver);
        $this->typeCarAceepted = $typeCarAccepted;
        $this->seatsMaterial = $seatsMaterial;
    }
}
?>