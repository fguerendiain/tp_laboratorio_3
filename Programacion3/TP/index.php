<?php
    include_once "empleado.php";
    include_once "fabrica.php";

    $emp1 = new Empleado("Carlos", "Villagran", 31757094, 'm' , 1234, 16000);
    $emp2 = new Empleado("Florencia", "Luque", 5132456, 'f' , 1235, 17000);
    $emp3 = new Empleado("Franco", "Rogan", 45987654, 'm' , 1236, 16000);
    $emp4 = new Empleado("Quique", "Pendocho", 23456789, 'm' , 1237, 15000);

    $fab = new Fabrica("Cualquiera Icorporated");    

    $fab->AgregarEmpleado($emp1);
    $fab->AgregarEmpleado($emp2);
    $fab->AgregarEmpleado($emp3);
    $fab->AgregarEmpleado($emp4);

    echo("<br>");
    echo($fab);

    $fab->GuardarFabrica("Cualquiera Icorporated");

    echo("<br>");
    $fab->EliminarEmpleado($emp3);
    $fab->EliminarEmpleado($emp1);

    echo($fab);
    
    $fabLeida = new Fabrica("Tu vieja");
    echo("<br>");
    $fabLeida->RecuperarDatos("Cualquiera Icorporated");
    echo("<br>");
    echo($fabLeida);
    echo("<br>");

?>