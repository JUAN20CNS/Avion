<?php 
	include_once './ShareKernel/Rules/NotNull.php';
	include_once './ShareKernel/Rules/NotString.php';
	class CargaValue
	{
		private $carga = null;
	    private $maxCarga = 1000;

	    public function __construct($carga) {
	        $response = new NotNull($carga);
	        if ($response->isValid()) {
	                $this->car = $carga;
	        }else{
	            echo $response->mensaje;
	        }
	        $response = new NotString($carga);
	        if ($response->isNumeric()) {
	            if ($carga <= $this->maxCarga) {
	                $this->carga = $carga;
	            } else {
	                echo "La carga Maxima es 1000 Kgs.";
	            }
	        }else{
	            echo $response->mensaje;
	        }
	    }

	    function AsientoNoEntero($param) {
	        
	    }

	    function AsientoNoNegativo($param) {
	        
	    }

	    function getCarga() {
	        return $this->carga;
	    }

	}
 ?>