<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
$n1 = $_GET['n1'];
$n2 = $_GET['n2'];


if ($n1 == 0) {
    echo "No hay solucion encontrada.";
    } else {
    echo "valor de x = " + .(($n2 * (-1)) / $n1);
    }

?> 
    
</body>
</html>