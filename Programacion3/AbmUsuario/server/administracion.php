<?php
    include_once("clases/usuario.php");

    $input = json_decode(file_get_contents('php://input'));

    $reqLegajo = $input->legajo;
    $reqNombre = $input->nombre;
    $reqApellido = $input->apellido;
    $reqSexo = $input->sexo;
    $reqDni = $input->dni;
    $reqPath_foto = $input->path_foto;

    $auxUser = new Usuario($reqLegajo,$reqNombre,$reqApellido,$reqSexo,$reqDni,$reqPath_foto);
    if(Usuario::GuardarEnArchivo($auxUser))
    {
      //  echo("Se guardo el archivo");
    }

    $response = json_encode(array('vehiculo' => 'auto','marca'=>'ford','modelo'=>'hatchback'));

    echo($response);

?>