<?php 
	include_once './ShareKernel/Rules/NotNull.php';
	include_once './ShareKernel/Rules/NotString.php';
	class CombustibleValue
	{
		private $combustible = null;
	    private $maxCombustible = 20000;

	    public function __construct($combustible) {
	        $response = new NotNull($combustible);
	        if ($response->isValid()) {
	                $this->combustible = $combustible;
	        }else{
	            echo $response->mensaje;
	        }
	       $response = new NotString($combustible);
	        if ($response->isNumeric()) {
	            if ($combustible <= $this->maxCombustible) {
	                $this->combustible = $combustible;
	            } else {
	                echo "El combustible Maximo es 20000 Litros";
	            }
	        }else{
	            echo $response->mensaje;
	        }
	    }

	    function AsientoNoEntero($param) {
	        
	    }

	    function AsientoNoNegativo($param) {
	        
	    }

	    function getCombustible() {
	        return $this->combustible;
	    }

	}
 ?>