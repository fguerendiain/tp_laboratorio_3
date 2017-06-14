window.onload = function () {
    let motorCamion = new Motor(1000, "disel");
    let arrayAcc1 = new Accesorio(1, "levantavidrio");
    let arrayAcc2 = new Accesorio(2, "climatizador");
    let arrayAcc3 = new Accesorio(3, "Faros Antiniebla");
    let cam1 = new Camion(10000, motorCamion, 'iveco', 'SQED', arrayAcc1.nombre, Largo.mediano, true);
    cam1.agregarAccesorios(arrayAcc2.nombre);
    cam1.agregarAccesorios(arrayAcc3.nombre);
    cam1.Motor.Encender;
    alert(cam1.MostrarAccesorios());
    alert(cam1.PrecioFinal());
    cam1.Motor.Apagar;
};
/*5)Crear la siguiente funcionalidad en el “onload” de la ventana:

window.onload = function () {
    //1)Instanciar un camion
    //2)Agregarle al menos 2 accesorios.
    //3)encender el camión mostrando que se encendió por pantalla.
    //4)Mostrar los accesorios por pantalla.
//5)Mostrar el valor total del camión por pantalla.
    //6)Apagar el motor mostrando que se apagó por pantalla.
}; */ 
