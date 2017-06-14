class Motor {
    constructor(potencia, tipo) {
        this.potencia = potencia;
        this.tipo = tipo;
    }
    Encender(cb) {
        window.setTimeout(() => { cb(true, this.tipo); }, 3000);
    }
    Apagar(cb) {
        window.setTimeout(() => { cb(false, this.tipo); }, 3000);
    }
}
/*

1)Crear una clase “Motor” que tenga:
a.	Constructor con potencia y tipo.
b.	Método para encender.
c.	Método para apagar.
NOTA: Los métodos para encender y apagar recibirán como parámetro una función “callback” que recibe un boolean con el estado y un string con el tipo de motor, y no devuelven nada. Ambos métodos tendrán el siguiente código:
window.setTimeout(() => {callback(true, this.tipo);}, 3000);
*/ 
