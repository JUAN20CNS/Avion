class crearAvionHandler {
    constructor(avion) {
        var param = {
            task: "crearAvion",
            matricula: "matricula",
            uidMarca: "uidMarca",
            capcombustible: "capcombustible",
            asiento: "asiento",
        }

        $.ajax({
            type: 'POST',
            url: "./Infraestructura/Repositorio/VueloAvionRepositorio.php",
            data: param,
            beforeSend: function (x) {
                console.log("esperando respuesta");
            }, success: function (data, textStatus, jqXHR) {
                console.log("Avion creado: " + data);
            }
        })
    }

}