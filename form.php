<!DOCTYPE html>
<html>
<head>
	<title>Alumnos </title>
</head>
<body>
	<?php
	$conexion = mysqli_connect("localhost","root","","base1") or die ("problemas con la conexion");

	mysql_query($conexion,"insert into alumnos(nombre,mail,codigocurso")
		values("$_REQUEST[nombre]","$_REQUEST[mail]","$_REQUEST[codigocurso])") 
		or die("problemas en el select"). mysqli_error($conexion);
	mysqli_close($conexion);
	echo "El alumno fue dado de alta";
	?>
</body>
</html>