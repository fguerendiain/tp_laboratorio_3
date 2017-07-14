// Crear interfaces

// Cree una interfaz para validar el auto (el valor enviado por parametro)

interface Auto{
  encender:boolean;
  velocidadMaxima:number;
  acelerar():void;
}


function conducirBatimovil( auto:Auto ):void{
  auto.encender = true;
  auto.velocidadMaxima = 100;
  auto.acelerar();
}

let batimovil:Auto = {
  encender:false,
  velocidadMaxima:0,
  acelerar(){
    console.log("...... run!!!");
  }
}

// Cree una interfaz que permita utilzar el siguiente objeto
// utilizando propiedades opcionales
interface Guason{
  reir:boolean;
  comer?:boolean;
  llorar?:boolean;
}

let guason = {
  reir: true,
  comer:true,
  llorar:false
}

function reir( guason:Guason ):void{
  if( guason.reir ){
    console.log("JAJAJAJA");
  }
}


// Cree una interfaz para la siguiente funcion
interface Goticfunction{
  (ciudadanos:string[]):number;
}

let ciudadGotica: Goticfunction;

 ciudadGotica = function( ciudadanos:string[] ):number{
  return ciudadanos.length;
}

// Cree una interfaz que obligue crear una clase
// con las siguientes propiedades y metodos

/*
  propiedades:
    - nombre
    - edad
    - sexo
    - estadoCivil
    - imprimirDatos(): void // en consola una breve descripcion.
*/

interface Persona{
  nombre:string;
  edad:number;
  sexo:string;
  estadoCivil:number;
  imprimirDatos():void;
}

class PersonaClass implements Persona{

  nombre:string;
  edad:number;
  sexo:string;
  estadoCivil:number;
  imprimirDatos():void{
    console.log("una breve descripcion");
  }
}
