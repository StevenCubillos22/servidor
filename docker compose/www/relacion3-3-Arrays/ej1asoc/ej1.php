<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$numeros = array();
for ($i = 0; $i < 20; $i++) {
    $numeros[$i] = rand(0, 100);
} //recorro y pongo numeros aleatorios

// Declaramos el array asociativo
$resultados = array();

//recorremos de nuevo el array numeros pero en foreach
foreach ($numeros as $numero) {

    //Y formamos el array asociativo cogiendo de referencia
    $resultados[$numero] = array(
        "numero" => $numero,
        "cuadrado" => $numero * $numero,
        "cubo" => $numero * $numero * $numero
    );
} 



// Mostramos  los resultados en tres columnas
echo "<table border='1'>";
echo "<tr><th> Número </th><th> Cuadrado </th><th> Cubo </th></tr>";

foreach ($resultados as $numero => $valores) {
    echo "<tr><td>".$numero."</td><td>".$valores['cuadrado']."</td><td>".$valores['cubo']."</td></tr>";
}

echo "</table>";
?>
    
</body>
</html>