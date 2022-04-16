<?php 
	class NotString{
		private $object = "";
	    private $mensaje = "El objeto no puede ser un String";
	    private $flag = true;

	    public function __construct($objeto) {
	        $this->object = $objeto;
	    }

	    function isNumeric() {
	        if (is_Numeric($this->object)) {
	             $this->flag = true;
	        } else {
	            $this->flag = false;
	        }

	        return $this->flag;
	    }
	}
 ?>