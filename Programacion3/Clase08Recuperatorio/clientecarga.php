<?php
	require_once("AccesoDatos.php");

    $nombre = $_POST['nombre'];
    $correo = $_POST['correo'];
    $edad = $_POST['edad'];
    $clave = $_POST['clave'];


    $PDOObject = AccesoDatos::DameUnObjetoAcceso();
    $consulta = $PDOObject->RetornarConsulta('INSERT INTO `cliente`(`nombre`, `correo`, `edad`, `clave`) VALUES ('.$nombre.', '.$correo.', '.$edad.', '.$clave.');');
    $consulta->execute();
?>