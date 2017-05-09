<?php
    include_once("Usuario.php");

        $usuarios = Usuario::LeerUsuariosDeArchivo();

        echo("<table>");
            echo("<tr>");
            echo("<td>Nombre</td>");
            echo("<td>Edad</td>");
            echo("<td>Correo</td>");
            echo("<td>Clave</td>");
            echo("</tr>");
        for($i=0 ; $i < count($usuarios) ; $i++)
        {
            echo("<tr>");
            echo("<td>".$usuarios[$i]->_nombre."</td>");
            echo("<td>".$usuarios[$i]->_edad."</td>");
            echo("<td>".$usuarios[$i]->_correo."</td>");
            echo("<td>".$usuarios[$i]->_clave."</td>");
            echo("<td><input type='button' onclick=Borrar(".$usuario[$i].") name =".$usuarios[$i]->_nombre."value='Borrar'></td>");
            echo("</tr>");
        }
        echo("</table>");
        
        function Borrar($obj)
        {

            for($i=0 ; $i < count($usuarios) ; $i++)
            {
                if($usuarios[$i]->_correo == $obj->_correo && $usuarios[$i]->_clave == $obj->_clave && $usuarios[$i]->_edad == $obj->_edad && $usuarios[$i]->_nombre == $obj->_nombre)
                {
                    $usuarios->unset($usuarios[$i]);
                }
            }
            for($i=0 ; $i < count($usuarios) ; $i++)
            {
               unlink ("usuarios.txt");
               Usuario::GuardarEnArchivo($usuario[$i]);
            }
        }


?>
