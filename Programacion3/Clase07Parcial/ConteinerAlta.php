<?php
    include_once("AccesoDatos.php");

    $file = $_FILES["btnEnviarCont"]["name"];
    $target = "/";
    $target_file = $target . $file;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    if (file_exists($target_file))
    {
        echo("EXISTE");
        
        copy($target_file,$target . date("Ymdhis") . $file);
        move_uploaded_file($_FILES["btnEnviarCont"]["tmp_name"], $target_file);
    }
    else
    {
        echo("NO EXISTE");
        move_uploaded_file($_FILES["btnEnviarCont"]["tmp_name"], $target_file);
    }

        $descripcion = $_POST["descripcion"]; 
        $pais = $_POST["pais"]; 

        $bd = new AccesoDatos();

        $bd->RetornarConsulta("INSERT INTO 'Conteiner'('descripción', 'país', 'foto') VALUES ('.$descripcion.','.$pais.','.$target_file.')");

?>