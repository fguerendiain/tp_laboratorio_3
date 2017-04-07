<?php
    include_once "empleado.php";
    include_once "fabrica.php";

    $emp1 = new Empleado("Carlos", "Villagran", 31757094, 'm' , 1234, 16000);
    $emp2 = new Empleado("Florencia", "Luque", 5132456, 'f' , 1235, 17000);
    $emp3 = new Empleado("Franco", "Rogan", 45987654, 'm' , 1236, 16000);
    $emp4 = new Empleado("Quique", "Pendocho", 23456789, 'm' , 1237, 15000);

    echo($emp1);
    echo("<br>");
    echo($emp1->Hablar("Español"));
    echo("<br>");
    echo($emp1->getNombre());
    echo("<br>");
    echo($emp1->getApellido());
    echo("<br>");
    echo($emp1->getDni());
    echo("<br>");
    echo($emp1->getSexo());
    echo("<br>");
    echo($emp1->getLegajo());
    echo("<br>");
    echo($emp1->getSueldo());
    echo("<br>");
    echo("<br>");

    $fab = new Fabrica("Cualquiera Icorporated");    

    $fab->AgregarEmpleado($emp1);
    $fab->AgregarEmpleado($emp2);
    $fab->AgregarEmpleado($emp3);
    $fab->AgregarEmpleado($emp4);

    echo("<br>");
    echo("Sueldo Total: " . $fab->CalcularSueldos());
    echo("<br>");
    echo($fab);

    $fab->EliminarEmpleado($emp3);

    echo("<br>");
    echo("Sueldo Total: " . $fab->CalcularSueldos());
    echo("<br>");
    echo($fab);

    $fab->GuardarFabrica($fab->GetRazonSocial());
    
    $fabLeida = new Fabrica("Tu vieja");
    echo("<br>");
    $fabLeida->RecuperarDatos($fab->GetRazonSocial());
    echo("<br>");
    echo($fabLeida);
    echo("<br>");

?>