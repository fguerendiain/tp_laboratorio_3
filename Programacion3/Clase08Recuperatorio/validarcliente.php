<?php
	require_once("AccesoDatos.php");
    include_once("Cliente.php");

    $correo = $_POST['correo'];
    $clave = $_POST['clave'];

    $PDOObject = AccesoDatos::DameUnObjetoAcceso();
    $consulta = $PDOObject->RetornarConsulta('SELECT `nombre`, `correo`, `edad`, `clave` FROM `cliente`;');
    $consulta->execute();
    $clientes = $consulta->fetchAll(PDO::FETCH_CLASS,"Cliente");
    
    foreach($clientes as $client)
    {
        if($client->correo == $correo && $client->clave == $clave)
            {
            $_SESSION['registrado'] = $client->correo;
                setcookie($client->correo);
                echo "<script language='JavaScript'>"; 
                echo "location = 'clientelistado.php'"; 
                echo "</script>";
            }
    }

    
    echo("<br><br><h1>El usuario y Clave no son validos</h1>");


// 2- (2pts)ValidarCliente.php: Pedir correo y clave, si coincide con
// algún dato de los cargados, ir a ClienteListado.php, sino mostrar el error.
?>


