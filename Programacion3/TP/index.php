<?php
    include_once "empleado.php";

    $emp1 = new Empleado("Carlos", "Villagran", 31757094, 'm' , 1234, 16000);

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





?>