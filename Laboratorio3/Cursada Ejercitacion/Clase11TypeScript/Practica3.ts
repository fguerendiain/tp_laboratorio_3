
// Objetos
type autoFiccion = {carroceria:string, modelo:string, antibalas:boolean, pasajeros:number, disparar?:()=>void}; 

let batimovil:autoFiccion={
  carroceria: "Negra",
  modelo: "6x6",
  antibalas: true,
  pasajeros:4
};

let bumblebee:autoFiccion = {
  carroceria: "Amarillo con negro",
  modelo: "4x2",
  antibalas: true,
  pasajeros:4,
  disparar(){ // El metodo disparar es opcional
    console.log("Disparando");
  }
};


// Villanos debe de ser un arreglo de objetos personalizados
type arregloDeVillanosPersonalizado = {nombre:string,edad:number,mutante:Boolean};

let villanos:arregloDeVillanosPersonalizado[] = [{
    nombre:"Lex Luthor",
    edad: 54,
    mutante:false
  },{
    nombre: "Erik Magnus Lehnsherr",
    edad: 49,
    mutante: true
  },{
    nombre: "James Logan",
    edad: undefined,
    mutante: true
  }];

// Multiples tipos
// cree dos tipos, uno para charles y otro para apocalipsis

type tipoCharles = {poder:string,estatura:number};
type tipoApocali = {lider:boolean,miembros:string[]};

let charles:tipoCharles = {
  poder:"psiquico",
  estatura: 1.78
};

let apocalipsis:tipoApocali = {
  lider:true,
  miembros: ["Magneto","Tormenta","Psylocke","Angel"]
}

// Mystique, debe poder ser cualquiera de esos dos mutantes (charles o apocalipsis)
let mystique: tipoCharles | tipoApocali;

mystique = charles;
mystique = apocalipsis;
