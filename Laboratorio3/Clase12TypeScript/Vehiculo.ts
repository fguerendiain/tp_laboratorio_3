class Vehiculo{

	private _precioBase: number;
	private _motor: Motor;
	public marca: string;
	public modelo: string;
	private listaAccessorios: string[];

    constructor(precio:number, motor:Motor, marca:string, modelo:string, listaAcc:string){
        this._precioBase = precio;
        this._motor = motor;
        this.marca = marca;
        this.modelo = modelo;
        this.listaAccessorios = [];
        this.listaAccessorios.push(listaAcc);
    }

    get Precio():number{
        return this._precioBase
    }

    set Precio(precio:number){
        this._precioBase = precio;
    }

    get Motor():Motor{
        return this._motor
    }

    set Motor(motor:Motor){
        this._motor = motor;
    }

    get Marca():string{
        return this.marca
    }

    set Marca(marca:string){
        this.marca = marca;
    }

    get Modelo():string{
        return this.modelo
    }

    set Modelo(modelo:string){
        this.modelo = modelo;
    }

    get ListaAccessorios():string[]{
        return this.listaAccessorios
    }

    set ListaAccessorios(listaAcc:string[]){
        this.listaAccessorios = listaAcc;
    }

    public PrecioFinal():number{
        return this._precioBase * 1.08;
    }

    public agregarAccesorios(accessorio: string){
         this.listaAccessorios.push(accessorio); 
    }

    public MostrarAccesorios():string{
        let cadena;
        for(let i=0; this.ListaAccessorios.length; i++){
            cadena+= this.ListaAccessorios[i] + " ";
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