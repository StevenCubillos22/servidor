<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
// Definimos el array "numero" y llenarlo con valores aleatorios entre 0 y 100
$numeros = array();
for ($i = 0; $i < 20; $i++) {
    $numeros[$i] = rand(0, 100);
}


//otra forma de declararlo:
    //$numeros=[1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16,17,18,19,20]
    //$cubo=[1,2,3,4,5,6.....]

// Calcular los cuadrados y cubos
$cuadrados = array();
$cubos = array();


for ($i = 0; $i < 20; $i++) {
    $cuadrados[$i] = $numeros[$i] * $numeros[$i];
    $cubos[$i] = $numeros[$i] * $numeros[$i] * $numeros[$i];
}


// Mostrar los resultados en tres columnas
echo "<table border='1'>";
echo "<tr><th> Número </th><th> Cuadrado </th><th> Cubo </th></tr>";
for ($i = 0; $i < 20; $i++) {
    echo "<tr><td>".$numeros[$i]."</td><td>".$cuadrados[$i]."</td><td>".$cubos[$i]."</td></tr>";
}
echo "</table>";
?>
    
</body>
</html>