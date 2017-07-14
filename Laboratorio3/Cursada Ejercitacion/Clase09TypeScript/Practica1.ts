// Tipos
let batman:string = "Bruce";
let superman:string = "Clark";

let existe:boolean = false;

// Tuplas
let parejaHeroes:[string,string] = [batman,superman];
let villano:[string, number, boolean] = ["Lex Lutor",5,true];

// Arreglos
let aliados:string[] = ["Mujer Maravilla","Acuaman","San", "Flash"];

//Enumeraciones
enum Fuerzas{
  Aquaman = 0,
  oBatman = 1,
  Flash = 5,
  Superman = 100,
}

let fuerzaFlash:Fuerzas = Fuerzas.Flash;
let fuerzaSuperman:Fuerzas = Fuerzas.Superman;
let fuerzaBatman:Fuerzas =  Fuerzas.oBatman;
let fuerzaAcuaman:Fuerzas = Fuerzas.Aquaman;

// Retorno de funciones
function activar_batiseñal():string{
  return "activada";
}

function pedir_ayuda():void{
  console.log("Auxilio!!!");
}

// Aserciones de Tipo
let poder:any = "100";
let largoDelPoder = (<string>poder).length;
console.log( largoDelPoder );

/*EXPLICACION
 *  sirve para determinarle a Typescript que en una variable Any se decidio cargar un dato determinado
 */

