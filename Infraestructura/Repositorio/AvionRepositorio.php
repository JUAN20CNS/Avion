<?php

include_once '../../Domain/Model/Avion/Avion.php';

switch ($_POST["task"]) {
    case "crearAvion":

        $nuevoAvion = new Avion($_POST["marca"], $_POST["asiento"]);
        $lista = array();

        $datos["uid"] = $nuevoAvion->getUid();
        $datos["matricula"] = $nuevoVuelo->getMatricula();
        $lista[] = $datos;

        echo json_encode($lista);

        break;

    default:
        break;
}