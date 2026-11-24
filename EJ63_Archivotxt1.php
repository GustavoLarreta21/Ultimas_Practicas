<!DOCTYPE html>
<html lang="es">
<head>     
	<meta charset="UTF-8">     
	<title>Guarda Informacion
	</title> 
</head> 
<body>
	<h2>Guardar Informacion en un Archivo</h2>

<?php
	$nombre = "Ana Lopez";
	file_put_contents("alumnos.txt", $nombre . PHP_EOL, FILE_APPEND);
	echo "Informacion guardado correctamente.";
	echo "<br><br>";
?>

<?php
	echo "<br><br>";
	$contenido = file_get_contents("alumnos.txt");
	//echo contenido
	echo nl2br($contenido);
?>	
</body>
</html>				    