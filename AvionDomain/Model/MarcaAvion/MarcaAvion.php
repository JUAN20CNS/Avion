<?php 
	/**
	 * 
	 */
	class MarcaAvion
	{
		
	 	private $uid = null;
	    private $marca = null;
	    private $modelo = null;

	    public function __construct($marca,$modelo) {
        $this->uid = uniqid(rand(), true);
        $this->marca = $marca;
        $this->modelo = $modelo;
    }

    function getMarcaAvion() {
        return $this->marcaAvion->getMarca();
    }
	    
	}
 ?>