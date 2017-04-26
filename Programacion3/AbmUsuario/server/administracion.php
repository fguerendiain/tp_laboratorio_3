<?php
    require_once("clases/usuario.php");

    $reqLegajo = $_POST['legajo'];
    $reqNombre = $_POST['nombre'];
    $reqApellido = $_POST['apellido'];
    $reqSexo = $_POST['sexo'];
    $reqDni = $_POST['dni'];
    $reqPath_foto = $_POST['path_foto'];


    $auxUser = new Usuario($reqLegajo,$reqNombre,$reqApellido,$reqSexo,$reqDni,$reqPath_foto);

    Usuario::GuardarUsuarioenBD($auxUser);

    return "ok";
?>