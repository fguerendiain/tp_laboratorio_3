<?php
    include_once "empleado.php";
    include_once "fabrica.php";

           $empleados = array();
           $archivo = fopen("empleados.txt","r");

           while(!feof($archivo))
           {
                $linea = fgets($archivo);

                if(empty($linea))
                {
                    break;
                }

                $auxEmpleado = explode("-",$linea);
                $array = new Empleado($auxEmpleado[0],$auxEmpleado[1],$auxEmpleado[2],$auxEmpleado[3],$auxEmpleado[4],$auxEmpleado[5]);
                array_push($empleados,$array);
           }
           fclose($archivo);

           for($i=0 ; $i < count($empleados) ; $i++)
           {
               echo($empleados[$i] . "<br>");
           }


?>