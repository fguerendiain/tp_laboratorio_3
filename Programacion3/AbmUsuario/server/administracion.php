<?php
    include_once("clases/usuario.php");

    $reqLegajo = $_POST["legajo"];
    $reqNombre = $_POST["nombre"];
    $reqApellido = $_POST["apellido"];
    $reqSexo = $_POST["sexo"];
    $reqDni = $_POST["dni"];
    $reqPath_foto = $_POST["path_foto"];

    $auxUser = new Usuario($reqLegajo,$reqNombre,$reqApellido,$reqSexo,$reqDni,$reqPath_foto);
//    if(Usuario::GuardarEnArchivo($auxUser))
//    {
        echo("Se guardo el archivo<br><br>");
//    }

    echo("HOLA<br><br>");

//    echo("<br>".$auxUser->ToString()."<br>");
?>