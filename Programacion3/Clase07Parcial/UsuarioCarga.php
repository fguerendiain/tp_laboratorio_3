<?php
    include_once("Usuario.php");

        $pass = $_POST["clave"]; 
        $name = $_POST["name"]; 
        $email = $_POST["email"]; 
        $age = $_POST["edad"]; 

        $usuario = new Usuario($pass,$name,$email,$age);

        echo($usuario->ToString());
        var_dump($usuario);
        Usuario::GuardarEnArchivo($usuario);

        echo "<script language='JavaScript'>"; 
        echo "location = 'index.html'"; 
        echo "</script>";  
?>
