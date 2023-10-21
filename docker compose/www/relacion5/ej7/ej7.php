<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

//

function generaArrayBiInt($n, $m, $minimo, $maximo) {
    $arrayBidimensional = array();
    for ($i = 0; $i < $n; $i++) {
        $fila = array();
        for ($j = 0; $j < $m; $j++) {
            $fila[] = rand($minimo, $maximo);
        }
        $arrayBidimensional[] = $fila;
    }
    return $arrayBidimensional;
}


//

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









?>
    
</body>
</html>