function Saludar()
{
    var nombre;
    var txtNombre;

//    nombre = document.getElementById("nombre").value;
    txtNombre = document.getElementById("nombre");

    var txtSaludo = document.getElementById("saludo");


//    alert("su nombre es: " + txtNombre.value);
    txtSaludo.value = txtNombre.value;


    //window.alert("Sabooooor!!!\nAgridulce");
    //console.log("Hola Culiaoooo!!!");
    //document.writeln("Chau que tal<br>Campeon");


/*
    var suma;
    suma = confirm("¿Tenes Hambre?");
    if(suma)
    {
        alert("Comete esta");
    }
    else
    {
        alert("Mejor, estas gordo");

    }
*/


/*  var numero1 = parseInt(prompt("Ingrese el primer nuemero"));
    var numero2= parseInt(prompt("Ingrese el segundo numero"));
    var suma = numero1 + numero2;

    if(isNaN(suma))
    {
        alert("pone numeros Gil")
    }
    else
    {
        alert("La suma es: " + suma);
    }
*/



/*
    var nombre = prompt("Ingrese su nombre");
    
    if (nombre == "franco")
    {
        alert("Vos no, otro");
    }
    else
    {
        alert("tu nombre es: " + nombre);
    }
*/
}