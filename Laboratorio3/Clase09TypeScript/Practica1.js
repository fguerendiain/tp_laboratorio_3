// Tipos
var batman = "Bruce";
var superman = "Clark";
var existe = false;
// Tuplas
var parejaHeroes = [batman, superman];
var villano = ["Lex Lutor", 5, true];
// Arreglos
var aliados = ["Mujer Maravilla", "Acuaman", "San", "Flash"];
//Enumeraciones
var Fuerzas;
(function (Fuerzas) {
    Fuerzas[Fuerzas["Aquaman"] = 0] = "Aquaman";
    Fuerzas[Fuerzas["oBatman"] = 1] = "oBatman";
    Fuerzas[Fuerzas["Flash"] = 5] = "Flash";
    Fuerzas[Fuerzas["Superman"] = 100] = "Superman";
})(Fuerzas || (Fuerzas = {}));
var fuerzaFlash = Fuerzas.Flash;
var fuerzaSuperman = Fuerzas.Superman;
var fuerzaBatman = Fuerzas.oBatman;
var fuerzaAcuaman = Fuerzas.Aquaman;
// Retorno de funciones
function activar_batiseñal() {
    return "activada";
}
function pedir_ayuda() {
    console.log("Auxilio!!!");
}
// Aserciones de Tipo
var poder = "100";
var largoDelPoder = poder.length;
console.log(largoDelPoder);
