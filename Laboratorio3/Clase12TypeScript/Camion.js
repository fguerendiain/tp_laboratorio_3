var Largo;
(function (Largo) {
    Largo[Largo["corto"] = 0] = "corto";
    Largo[Largo["mediano"] = 1] = "mediano";
    Largo[Largo["largo"] = 2] = "largo";
})(Largo || (Largo = {}));
;
class Camion extends Vehiculo {
    constructor(precio, motor, marca, modelo, listaAcc, largo, cuatroXcuatro) {
        super(precio, motor, marca, modelo, listaAcc);
        this.largo = largo;
        this.cuatroXcuatro = cuatroXcuatro;
    }
}
/*4)Crear una clase “Camion” que:
a.	Herede de “Vehiculo”.
b.	Agregue 2 atributos:
I.	Largo(string con valores posibles “corto”, “mediano”, o “largo”).
II.	cuatroXcuatro(booleano).
*/ 
