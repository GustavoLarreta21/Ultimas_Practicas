<!DOCTYPE html>
<html lang="es">
<head>     
	<meta charset="UTF-8">     
	<title>Registro de alumnos
	</title> 
</head> 
<body>
	<h2>Registro de Alumnos de 3°A Programacion</h2>
	<form method="POST">
	Nombre del alumno:
	<input type="text" name="nombre">
	<br><br>
	Edad:
	<input type="number" name="edad">
	<br><br>
	Pasatiempo:
	<input type="text" name="pasatiempo">
	<br><br>
	<button type="submit" name="guardar">Guardar</button>	
</form>

<br><br>
<form method="POST">
<button type="submit" name="borrar">Borrar Todo</button>
</form>
<?php
if (isset($_POST['guardar'])) {
	$nombre = $_POST['nombre'];
	file_put_contents("ProgramacionA.txt", $nombre . PHP_EOL, FILE_APPEND);
	echo "<p>Nombre guardado correctamente.</p>";}
?>
<?php
if (isset($_POST['guardar'])) {
	$edad = $_POST['edad'];
	file_put_contents("Edad.txt", $edad . PHP_EOL, FILE_APPEND);
	echo "<p>Edad guardada correctamente.</p>";}
?>
<?php
if (isset($_POST['guardar'])) {
	$pasatiempo = $_POST['pasatiempo'];
	file_put_contents("Pasatiempo.txt", $pasatiempo . PHP_EOL, FILE_APPEND);
	echo "<p>Pasatiempo guardado correctamente.</p>";}
?>

<h3>Lista de alumnos de 3°A registrados</h3>
<?php
if (file_exists("ProgramacionA.txt")) {
	$contenido = file_get_contents("ProgramacionA.txt");
	echo nl2br($contenido);
}
?>
<?php
if (file_exists("Edad.txt")) {
	$contenido2 = file_get_contents("Edad.txt");
	echo nl2br($contenido2);
}
?>	
<?php
if (file_exists("Pasatiempo.txt")) {
	$contenido3 = file_get_contents("Pasatiempo.txt");
	echo nl2br($contenido3);
}
?>
<?php
if (isset($_POST['borrar'])) {
	if (file_exists("ProgramacionA.txt")) {
		unlink("ProgramacionA.txt");
	}
	if (file_exists("Edad.txt")) {
		unlink("Edad.txt");
	}
	if (file_exists("Pasatiempo.txt")) {
		unlink("Pasatiempo.txt");
	}
	echo "<p>Archivos Borrados correctamente.</p>";
	}
?>


</body>
</html>				    