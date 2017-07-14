class Vehiculo {
    constructor(precio, motor, marca, modelo, listaAcc) {
        this._precioBase = precio;
        this._motor = motor;
        this.marca = marca;
        this.modelo = modelo;
        this.listaAccessorios = [];
        this.listaAccessorios.push(listaAcc);
    }
    get Precio() {
        return this._precioBase;
    }
    set Precio(precio) {
        this._precioBase = precio;
    }
    get Motor() {
        return this._motor;
    }
    set Motor(motor) {
        this._motor = motor;
    }
    get Marca() {
        return this.marca;
    }
    set Marca(marca) {
        this.marca = marca;
    }
    get Modelo() {
        return this.modelo;
    }
    set Modelo(modelo) {
        this.modelo = modelo;
    }
    get ListaAccessorios() {
        return this.listaAccessorios;
    }
    set ListaAccessorios(listaAcc) {
        this.listaAccessorios = listaAcc;
    }
    PrecioFinal() {
        return this._precioBase * 1.08;
    }
    agregarAccesorios(accessorio) {
        this.listaAccessorios.push(accessorio);
    }
    MostrarAccesorios() {
        let cadena;
        for (let i = 0; this.ListaAccessorios.length; i++) {
            cadena += this.ListaAccessorios[i] + " ";
        }
        return cadena;
    }
}
/*3)Crear una clase “Vehiculo” que tenga los siguientes atributos:
•	private _precioBase: number
•	private _motor: Motor
•	marca: string
•	modelo: string
•	private listaAccessorios: string

Además agregar:
•	constructor.
•	get y set para los atributos privados.
•	Método que tomando el precio base, devuelva el precio total (con impuesto del 8%).
•	Método para agregar accesorios con la siguiente firma:
agregarAccesorios(...accessorios: Accesorio[])
*/ 
