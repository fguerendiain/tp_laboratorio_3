<?php
    include_once("Usuario.php");

        $pass = $_POST["clave"]; 
        $email = $_POST["email"];
        $flag = true;

        $usuarios = Usuario::LeerUsuariosDeArchivo();

        for($i=0 ; $i < count($usuarios) ; $i++)
        {
            if($usuarios[$i]->_correo == $email && $usuarios[$i]->_clave == $pass)
            {
                $flag = false;
                echo "<script language='JavaScript'>"; 
                echo "location = 'Listado.php'"; 
                echo "</script>";  
            }
        }
        if($flag)
        {
            echo "<script language='JavaScript'>"; 
            echo "alert('Usuario Invalido')"; 
            echo "</script>";  

        }
        
?>

