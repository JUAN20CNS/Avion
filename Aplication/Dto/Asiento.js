const _privateAsiento=new WeakMap();

class Asiento {
    constructor(asiento, fila,uidAvion) {

        const properties = {
            Asiento: "",
            Fila: "",
            uidAvion:Avion
            
        }

        _privateAsiento.set(this, {properties});

    }

    get getAsiento() {
    return _privateAsiento.get(this).properties['asiento'];
    }

    set setAsiento(asiento) {
    return _privateAsiento.get(this).properties['asiento'] = asiento;
    }

    get getFila() {
    return _privateAsiento.get(this).properties['fila'];
    }

    set setFila(fila) {
    return _privateAsiento.get(this).properties['fila'] = fila;
    }

    get getUidAvion() {
        return _privateVuelo.get(this).properties['uidAvion'];
    }

    set setUidAvion(uidAvion) {
        return _privateVuelo.get(this).properties['uidAvion'] = uidAvion;
    }
    

}
	