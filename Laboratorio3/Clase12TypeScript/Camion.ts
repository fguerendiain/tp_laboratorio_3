enum Largo {'corto','mediano','largo'};

class Camion extends Vehiculo{

    public largo:Largo;
    public cuatroXcuatro:boolean;


    constructor(precio:number, motor:Motor, marca:string, modelo:string, listaAcc:string,largo:Largo,cuatroXcuatro:boolean){
        super(precio,motor,marca,modelo,listaAcc)
        
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