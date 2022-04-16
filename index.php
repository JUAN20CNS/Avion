<?php
include_once './AvionDomain/Model/MarcaAvion/MarcaAvion.php';
include_once './AvionDomain/Model/Asiento/Asiento.php';
include_once './AvionDomain/Model/Avion/Avion.php';
include_once './AvionDomain/Model/Mensajeria/Mensajeria.php';


$marcaAvion=new marcaAvion("AIRBUS","A320");

$registroAsientos=array();
$registroAsientos[]=new Asiento("1B","1");
$registroAsientos[]=new Asiento("3C","1");
$registroAsientos[]=new Asiento("23D","7");
$registroAsientos[]=new Asiento("150F","25");
$registroAsientos[]=new Asiento("200A","19");
$registroAsientos[]=new Asiento("10E","2");

$avion=new Avion("MD-591",5,"999",1999,$registroAsientos,"DISPONIBLE");
$registroAvion[]=$avion;

$mensajeria = new Mensajeria($registroAvion);

$mensajeria->Avion();



/*$avion=new Avion('marca','modelo','ss');
$avion->addAsiento(new Asiento("1A", "5"));
$avion->addAsiento(new Asiento("1A", "5")); 
$avion->addAsiento(new Asiento("1A", "5"));
$avion->addAsiento(new Asiento("1A", "5"));


$avionesRegistrados = array();
$avionesRegistrados[] = new Asiento("200", 5);
$avionesRegistrados[] = new Asiento("300", 5);
$avionesRegistrados[] = new Asiento("100", 5);
$avionesRegistrados[] = new Asiento("090", 5);
$avionesRegistrados[] = new Asiento("200", 6);
$avionesRegistrados[] = new Asiento("300", 7);
$avionesRegistrados[] = new Asiento("100", 8);
$avionesRegistrados[] = new Asiento("090", 9);

foreach ($avionesRegistrados as $resultado) {
    echo "<br/>".$resultado->getUid() . "<br/>";
}*/


//echo $resultado;


?>