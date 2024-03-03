<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

//Genera un array de tamaño n x m con números aleatorios cuyo
//intervalo (mínimo y máximo) se indica como parámetro.


function generaArrayBiInt($n, $m, $minimo, $maximo) {
    $arrayBidimensional = array();
    for ($i = 0; $i < $n; $i++) {
        for ($j = 0; $j < $m; $j++) {
            $arrayBidimensional[$i][$j] = rand($minimo, $maximo);
        }
    }
    return $arrayBidimensional;
}


//filaDeArrayBiInt: Devuelve la fila i-ésima del array que se pasa como parámetro.

function filaDeArrayBiInt($arrayBidimensional, $i) {
    return $arrayBidimensional[$i];
}

//

function columnaDeArrayBiInt($arrayBidimensional, $j) {
    $columna = array();
    foreach ($arrayBidimensional as $fila) {
        $columna[] = $fila[$j];
    }
    return $columna;
}


// Ejemplo de uso de las funciones
$n = 3;
$m = 4;
$minimo = 1;
$maximo = 100;

// Generar un array bidimensional usando la función generaArrayBiInt
$arrayBidimensional = generaArrayBiInt($n, $m, $minimo, $maximo);
echo "Array Bidimensional:<br>";

// Mostrar el array bidimensional sin utilizar print_r
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $m; $j++) {
        echo $arrayBidimensional[$i][$j] . " ";
    }
    echo "<br>";
}

// Obtener la fila i-ésima del array bidimensional usando la función filaDeArrayBiInt
$i = 1;
$fila = filaDeArrayBiInt($arrayBidimensional, $i);
echo "<br>Fila $i:<br>";

// Mostrar la fila sin utilizar print_r
foreach ($fila as $valor) {
    echo $valor . " ";
}

// Obtener la columna j-ésima del array bidimensional usando la función columnaDeArrayBiInt
$j = 2;
$columna = columnaDeArrayBiInt($arrayBidimensional, $j);
echo "<br><br>Columna $j:<br>";

// Mostrar la columna sin utilizar print_r
foreach ($columna as $valor) {
    echo $valor . "<br>";
}


?>
    
</body>
</html>