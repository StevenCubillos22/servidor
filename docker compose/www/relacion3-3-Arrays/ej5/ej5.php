<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>

        table {
            width: 100%;
            border-collapse: collapse;
        }


        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        .columna1 {
            background-color: lightblue;
        }

        .columna2 {
            background-color: lightgreen;
        }

    </style>
</head>
<body>

<?php

$numeros = array();
for ($i = 0; $i < 8; $i++) {
    $numeros[$i] = rand(0, 100);
}

$par=[];
$impar=[];

foreach ($numeros as $datos) {
    if ($datos % 2 == 0) {
        $par[] = $datos;
    } else {
        $impar[] = $datos;
    }
}

echo "<table border='3'>";
echo "<tr><th> NÚMEROS PARES </th></tr>";
for ($i = 0; $i < count($par); $i++) {
    echo "<tr><td class='columna1'>".$par[$i]."</td></tr>";
}
echo "</table>";

echo "<br>";

echo "<table border='3'>";
echo "<tr><th> NÚMEROS IMPARES </th></tr>";
for ($i = 0; $i < count($impar); $i++) {
    echo "<tr><td class='columna2'>".$impar[$i]."</td></tr>";
}
echo "</table>";

?>
    
</body>
</html>