<?php

    $file = $_FILES["btnSubirArchivo"]["name"];
    $target = "foto/";
    $target_file = $target . $file;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    //move_uploaded_file($_FILES["btnSubirArchivo"]["tmp_name"], $target_file);

    if (file_exists($target_file))
    {
        echo("EXISTE");
        
        copy($target_file,$target . date("Ymdhis") . $file);
        move_uploaded_file($_FILES["btnSubirArchivo"]["tmp_name"], $target_file);
    }
    else
    {
        echo("NO EXISTE");
        move_uploaded_file($_FILES["btnSubirArchivo"]["tmp_name"], $target_file);
    }




?>