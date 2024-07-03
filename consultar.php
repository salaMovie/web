<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>consultas</title>
	<style>
		$registros{
			color:black;
			font-size: 80pt;
		}
	</style>
</head>
<body>
	<?php $conexion=mysqli_connect("localhost","root","")
	or die ("Problemas en la conexion");
	mysqli_select_db($conexion,"salamovie") or
	die ("Problemas en la seleccion de la base de datos");
	$registros = mysqli_query($conexion, "SELECT * FROM registrar");
	$reg= mysqli_fetch_array($registros);
		"nombre:".$reg['nombre'];
		echo"<br>";echo "correo:".$reg['correo'];
		echo"<br>";echo "contraseña:".$reg['contraseña'];
	mysqli_free_result($registros);
	mysqli_close($conexion);
	?> 

</body>
</html>