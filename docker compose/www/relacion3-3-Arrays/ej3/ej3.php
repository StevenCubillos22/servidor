<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
// Generar 15 números aleatorios y almacenarlos en un array
$numeros = array();
for ($i = 0; $i < 15; $i++) {
    $numeros[$i] = rand(1, 60); // con rand genera números aleatorios entre 1 y 60
}

// Rota los elementos del array
$rotado = array();
array_push($rotado, array_pop($numeros)); // Mover el último elemento al principio
$rotado = array_merge($rotado, $numeros); // Unir el resto de los elementos

// Mostrar el contenido del array original y el array rotado
echo "Array Original:<br>";
echo implode(", ", $numeros); // Imprimir el array original como una cadena separada por comas
echo "<br><br>";

echo "Array Rotado:<br>";
echo implode(", ", $rotado); // Imprimir el array rotado como una cadena separada por comas
?>
    
</body>
</html>