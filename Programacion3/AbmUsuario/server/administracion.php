<?php
    include_once("clases/usuario.php");

    $reqLegajo = $_POST["legajo"];
    $reqNombre = $_POST["nombre"];
    $reqApellido = $_POST["apellido"];
    $reqSexo = $_POST["sexo"];
    $reqDni = $_POST["dni"];
    $reqPath_foto = $_POST["path_foto"];


//    $auxUser = new Usuario();
//      var_dump(new Usuario(123,"Mariano","Pestillo","m",31917440,"foto.jpg"));
//    $auxUser = new Usuario(123,"Mariano","Pestillo","m",31917440,"foto.jpg");

//        if($auxUser)
//        {
//            var_dump($auxUser);
//            echo("No el Objeto");
//        }

    $auxUser = new Usuario($reqLegajo,$reqNombre,$reqApellido,$reqSexo,$reqDni,$reqPath_foto);
    if(Usuario::GuardarEnArchivo($auxUser))
    {
        echo("Se guardo el archivo<br><br>")
    }
//    Usuario::GuardarUsuarioenBD($auxUser);

    echo("HOLA<br><br>");

    echo("<br>".$auxUser->ToString()."<br>");
?>