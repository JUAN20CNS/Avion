<?php
include_once 'ValueObject/CargaValue.php';
include_once 'ValueObject/CombustibleValue.php';
class Avion {

    private $uid = "";
    private $matricula="";
    private $marca = "";
    private $capacidad="";
    private $estado="";
    private $asientosAvion = array();

    public function __construct($matricula,$marca,$carga,$combustible,$asientos,$estado) {
        $this->uid = uniqid(rand(), true);
        $this->matricula = $matricula;
        $this->marca = $marca;
        $this->carga = new CargaValue($carga);
        $this->combustible = new CombustibleValue($combustible);
        $this->asientosAvion=$asientos;
        $this->estado=$estado;
        //idem lo mismo

    }

    public function getUid() {
        return $this->uid;
    }

    public function getMarca() {
        return $this->$marca;
    }

    public function getFila() {
        return $this->fila;
    }

    function setNroAsiento($nroAsiento) {
        $this->nroAsiento = $nroAsiento;
    }

    function setFila($fila) {
        $this->fila = $fila;
    }

    /*function cantidadAsientos(){
        return count($asientosAvion);
    }*/

}
