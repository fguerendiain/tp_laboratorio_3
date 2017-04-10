<?php
    include_once "../class/empleado.php";
    include_once "../class/fabrica.php";

    //To keep code clear, I often define units as constants:

    define('KB', 1024);
    define('MB', 1048576);
    define('GB', 1073741824);
    define('TB', 1099511627776);



    $flag = true;

    if(!$recNombre = $_POST['txtNombre'])$flag = false;
    if(!$recApellido = $_POST['txtApellido'])$flag = false;
    if(!$recDni = $_POST['txtDni'])$flag = false;
    if(!$recSexo = $_POST['rdBtnSexo'])$flag = false;
    if(!$recLegajo = $_POST['txtLegajo'])$flag = false;
    if(!$recSueldo = $_POST['txtSueldo'])$flag = false;

    $target_dir = "../../fotos/";
    $target_file = $target_dir . basename($_FILES['btnProfilePic']["name"]);
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);

    var_dump($_FILES['btnProfilePic']);
    echo($_FILES['btnProfilePic']['error']);

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"]))
    {
        $check = getimagesize($_FILES['btnProfilePic']["tmp_name"]);
        if($check !== false)
        {
            echo "El archivo es una imagen - " . $check["mime"] . ".";
        }
        else
        {
            echo "El archivo no es una imagen.";
            $flag = false;
        }
    }
    // Check if file already exists
    if (file_exists($target_file))
    {
        echo "El arhivo ya existe en el directorio.";
        $flag = false;
    }
    // Check file size
    if ($_FILES['btnProfilePic']["size"] > 1*MB)
    {
        echo "El archivo es demasiado grande.";
        $flag = false;
    }
    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "bmp" && $imageFileType != "gif"
    && $imageFileType != "png" && $imageFileType != "jpeg")
    {
        echo "Unicamente se aceptan los siguientes formatos: JPG - BMP - JPEG - PNG - GIF";
        $flag = false;
    }

    if($flag)
    {
        if (move_uploaded_file($_FILES['btnProfilePic']["tmp_name"], $target_file))
        {
            echo "El archivo ". basename( $_FILES['btnProfilePic']["name"]). " se guardo correctamente.";
        }
        else
        {
            echo "Hubo un error al subir el archivo";
        }

        $nuevoEmpleado = new Empleado($recNombre,$recApellido,$recDni,$recSexo,$recLegajo,$recSueldo);
        $archivo = fopen("../../exports/empleados.txt","a");
        fwrite($archivo,$nuevoEmpleado->__toString());
        fclose($archivo);
        echo("<h4>Se agrego el empleado con exito</h4><br><br>");
        echo("<a href='mostrar.php'>Ver lista de empleados</a>");
    }
    else
    {
        echo("<h4>No hay suficientes datos para crear el empleado</h4><br><br>");
        echo("<a href='../../index.html'>Volver a cargar un empleado</a>");
    }

?>