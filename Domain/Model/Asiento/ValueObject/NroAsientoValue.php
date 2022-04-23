<?php

include './ShareKernel/Rules/NotNull.php';

class NroAsientoValue {

    private $nroAsiento = null;
    private $maximoAsiento = 288;

    public function __construct($nroAsiento) {
         $response = new NotNull($nroAsiento);
            if ($response->isValid()) {
                $maxAsiento = (int) filter_var($nroAsiento, FILTER_SANITIZE_NUMBER_INT); 
                if ($maxAsiento <= $this->maximoAsiento) {
                    $this->nroAsiento = $maxAsiento;
                }else{
                    echo "el numero  de Asiento no debe ser mayor de 288";
                }
                    
            }else{
                echo $response->mensaje;
            }
    }

    function AsientoNoEntero($param) {
        
    }

    function AsientoNoNegativo($param) {
        
    }

    function getnroAsiento() {
        return $this->nroAsiento;
    }

}
