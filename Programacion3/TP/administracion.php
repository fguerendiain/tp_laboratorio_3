<?php
    include_once "empleado.php";
    include_once "fabrica.php";


    $flag = true;

    if(!$recNombre = $_POST['txtNombre'])$flag = false;
    if(!$recApellido = $_POST['txtApellido'])$flag = false;
    if(!$recDni = $_POST['txtDni'])$flag = false;
    if(!$recSexo = $_POST['rdBtnSexo'])$flag = false;
    if(!$recLegajo = $_POST['txtLegajo'])$flag = false;
    if(!$recSueldo = $_POST['txtSueldo'])$flag = false;

    if($flag)
    {
        $nuevoEmpleado = new Empleado($recNombre,$recApellido,$recDni,$recSexo,$recLegajo,$recSueldo);
        $archivo = fopen("empleados.txt","a");
        fwrite($archivo,$nuevoEmpleado->__toString());
        fclose($archivo);
        echo("<h4>Se agrego el empleado con exito</h4><br><br>");
        echo("<a href='mostrar.php'>Ver lista de empleados</a>");
    }
    else
    {
        echo("<h4>No hay suficientes datos para crear el empleado</h4><br><br>");
        echo("<a href='index.html'>Volver a cargar un empleado</a>");
    }

?>