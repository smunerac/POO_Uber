<?php
require_once('account.php');
class Car{
    public $id ;
    public $license  ;
    public $driver ;
    protected $passenger ;

    public function __construct($license,$driver){
        $this->license = $license;
        $this->driver = $driver;
    }

    public function PrintDataCar(){
        echo "license: $this->license, conductor: {$this->driver->name}, document: {$this->driver->document}, Numero de pasajeros: {$this->passenger}";
    }

    public function getPassenger(){
        return $this->passenger ;
    }

    public function setPassenger($passenger){
        if($passenger == 4){
            $this->passenger = $passenger;
        }else{
            echo "Necesitas asignar 4 pasajeros";
        }
    }
    public function getLicense(){
        return $this->license;
    }

    public function getDriver(){
        return $this->driver ;
    }
}
?>

