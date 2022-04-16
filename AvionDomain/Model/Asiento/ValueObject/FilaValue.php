<?php
include_once './ShareKernel/Rules/NotNull.php';
include './ShareKernel/Rules/NotString.php';
class FilaValue {
    private $Fila = null;
    private $maximoFilas = 48;

    public function __construct($Fila) {

         $response = new NotNull($Fila);
            if ($response->isValid()) {
                    $this->Fila = $Fila;
            }else{
                echo $response->mensaje;
            }
            $response = new NotString($Fila);
            if ($response->isNumeric()) {
                if ($Fila <= $this->maximoFilas) {
                    $this->Fila = $Fila;
                } else {
                    echo "el numero  de Fila no debe ser mayor de 48";
                }
            }else{
                echo $response->mensaje;
            }
    }

    function AsientoNoEntero($param) {
        
    }

    function AsientoNoNegativo($param) {
        
    }

    function getFila() {
        return $this->Fila;
    }
}
