<?php

class Mensajeria {

    private $Avion = null;

    public function __construct($Avion) {
        $this->Avion = $Avion;
    }
    
    function Avion() {
        foreach ($this->Avion as $lista) {
            echo $lista->getUid()." enviado <br/>";
        }
    }

}
