<!DOCTYPE html>
<html lang="es">

<head>     
	<meta charset="UTF-8">     
	<title>MI EJERCICIO
	</title> 
</head> 

<body>
	<h2>CONTEO DE AHORRO DE DOS AMIGOS</h2>        
<form method="POST" action="">

<?php
$num = array();
$v=200;
$num2 = array();
$v2=1000;
$num3 = array();

for ($f=0; $f < 5; $f++) { 
 	for ($c=0; $c <5 ; $c++) { 
 		$num[$f][$c]=$v; 
 		$v+=50;
 		$num2[$f][$c]=$v; 
 		$v2+=30;
 	}
}
for ($f=0; $f < 5; $f++) { 
 	for ($c=0; $c <5 ; $c++) { 
 		$num3[$f][$c]=$num[$f][$c]+$num2[$f][$c]; 
 	}
}
echo "<h2>AHORRO DE CAMILO </h2>";
echo "<table border='1'cellpadding='5' cellspacing='1'>"; 
for ($i=0; $i <5; $i++) { 
	echo "<tr>";
 	for ($j=0; $j <5 ; $j++) {
 		echo "<td>".$num[$i][$j]."</td>";
 	}
 	echo "</tr>";

}
echo "</table>";
echo "<br>";
echo "<table border='1'cellpadding='5' cellspacing='1'>"; 
echo "<br>";
echo "<h2> AHORRO DE JESUS </h2>";
for ($i=0; $i <5; $i++) { 
	echo "<tr>";
 	for ($j=0; $j <5 ; $j++) {
 		echo "<td>".$num2[$i][$j]."</td>";
 	}
 	echo "</tr>";
} 
echo "</table>";
echo "<br>";
echo "<table border='1'cellpadding='5' cellspacing='1'>";
echo "<br>";
echo "<h2> AHORRO TOTAL DE LOS DOS </h2>"; 
for ($i=0; $i <5; $i++) { 
	echo "<tr>";
 	for ($j=0; $j <5 ; $j++) {
 		echo "<td>".$num3[$i][$j]."</td>";
 	}
 	echo "</tr>";
} 
echo "</table>";

?>
</body>
</head>	