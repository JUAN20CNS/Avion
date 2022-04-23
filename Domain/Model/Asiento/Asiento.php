<?php
include_once 'ValueObject/NroAsientoValue.php';
include_once 'ValueObject/FilaValue.php';
class Asiento {

    private $uid = "";
    private $nroAsiento = "";
    private $fila = "";

    public function __construct($nroAsiento, $fila) {
        $this->uid = uniqid(rand(), true);
        $this->nroAsiento = new NroAsientoValue($nroAsiento);
        $this->fila = new FilaValue($fila);

    }

    public function getUid() {
        return $this->uid;
    }

    public function getnroAsiento() {
        return $this->nroAsiento;
    }

    public function getFila() {
        return $this->fila;
    }
// no debe haber set setter

    function setFila($fila) {
        $this->fila = $fila;
    }


}
