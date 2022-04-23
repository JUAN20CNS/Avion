const _privateMarca=new WeakMap();

class Marca {
    constructor(marca, modelo) {

        const properties = {
            marca: "",
            modelo: "",
            
        }

        _privateMarca.set(this, {properties});

    }

    get getMarca() {
    return _privateMarca.get(this).properties['marca'];
    }

    set setMarca(marca) {
    return _privateMarca.get(this).properties['marca'] = marca;
    }

    get getModelo() {
    return _privateMarca.get(this).properties['modelo'];
    }

    set setModelo(modelo) {
    return _privateMarca.get(this).properties['modelo'] = modelo;
    }

}
	