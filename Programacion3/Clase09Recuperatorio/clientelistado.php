<?php
//5- (2pts)ClienteListado.php, se mostrará el listado de usuarios con el botón borrar para borrar el usuario de la tabla.
?>

<?php 
session_start();
if(isset($_SESSION['registrado']))
{
	require_once("AccesoDatos.php");
	require_once("Cliente.php");

    $PDOObject = AccesoDatos::DameUnObjetoAcceso();
    $consulta = $PDOObject->RetornarConsulta('SELECT `nombre`, `correo`, `edad`, `clave` FROM `cliente`;');
    $consulta->execute();
    $clientes = $consulta->fetchAll(PDO::FETCH_CLASS,"Cliente");

	echo "<h2> Bienvenido: ". $_SESSION['registrado']."</h2><br><br>";
 ?>

<table>
	<thead>
		<tr>
			<th>Borrar</th>
            <th>Nombre</th><th>Edad</th><th>Correo</th>
		</tr>
	</thead>
	<tbody>

		<?php 

foreach ($clientes as $client) {
	echo"<tr>
			<td><input='button' value='Borrar' onclick='BorrarCliente($client->nombre)'></td>
			<td>$client->nombre</td>
			<td>$client->edad</td>
			<td>$client->correo</td>
		</tr>   ";
}
		 ?>
	</tbody>
</table>

<?php 	}else	{
		echo "<h4>Necesita logearce</h4>";
	}

	 ?>

