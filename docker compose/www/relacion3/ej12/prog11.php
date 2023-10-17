<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$num1= $_GET['n1'];
$num2= $_GET['n2'];
$num3= $_GET['n3'];

$num1 = 5;
$num2 = 2;
$num3 = 8;

// Ordenar los números de menor a mayor
if ($num1 > $num2) {
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
}


if ($num2 > $num3) {
    $temp = $num2;
    $num2 = $num3;
    $num3 = $temp;
}


if ($num1 > $num2) {
    $temp = $num1;
    $num1 = $num2;
    $num2 = $temp;
}


echo "Los números ordenados son: $num1, $num2 y $num3";
?>

    
</body>
</html>