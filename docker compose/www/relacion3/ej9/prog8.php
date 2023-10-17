<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php
$a = 1;
$b = -3;
$c = 2;

$discriminante = $b * $b - 4 * $a * $c;

if ($discriminante > 0) {
    $x1 = (-$b + sqrt($discriminante)) / (2 * $a);
    $x2 = (-$b - sqrt($discriminante)) / (2 * $a);
    echo "Las soluciones son: x1 = $x1 y x2 = $x2";
} elseif ($discriminante == 0) {
    $x = -$b / (2 * $a);
    echo "La solución única es: x = $x";
} else {
    echo "La ecuación no tiene soluciones reales.";
}
?>

    
</body>
</html>