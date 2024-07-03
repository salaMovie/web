<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>crear cuenta</title>
	
</head>
<body>
	<?php
	$conexion=mysqli_connect("localhost","root","")or die("problemas en la conexión");
	mysqli_select_db($conexion,"salamovie")or die("problemas en la conexión de la base de datos");
	mysqli_query($conexion,"insert into registrar(nombre,correo,contraseña) values ('$_REQUEST[nombre]','$_REQUEST[correo]',$_REQUEST[contraseña])")or die("problemas en el select".mysqli_connect_error());
	mysqli_close($conexion);
	?>
</body>
</html>