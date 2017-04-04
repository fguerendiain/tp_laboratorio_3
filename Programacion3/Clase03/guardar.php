<?php

    //var_dump($_REQUEST);
    var_dump($_POST);
    
    $nombres = $_POST['nombre'];

    if($_POST['btnGuardar'])
    {   
        GuardarEnArchivo();
    }
    else if($_POST['btnLeer'])
    {
        echo($nombres);
    }

    /*
        Se ingresara el nombre de la persona y el nombre del archivo guardando el dato en el archivo, al precionar el boton guardar, se verificara si el archivo existe
        De ya existir el archivo, se copiara y se movera a la carpeta backup, cambiandole el nombre por el nombre mas la fecha
        Al precionar el boton leer si el archivo existe, se mostrara el contenido, de no existir el archivo, se informara que no existe.
        
    */

    function GuardarEnArchivo()
    {
        $archivo = fopen("datos.txt", "w");
        fwrite($archivo,$nombres);
        fclose($archivo);
        echo("Se guardaron los datos en un archivo");
    }

?>