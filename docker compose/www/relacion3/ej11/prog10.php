<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$hora = $_GET['n1'];
$minutos = $_GET['n2'];

$hora = 15; // Hora actual
$minutos = 30; // Minutos actuales

$segundosHastaMedianoche = (24 - $hora - 1) * 3600 + (60 - $minutos) * 60;
echo "Faltan $segundosHastaMedianoche segundos para medianoche.";
?>

    
</body>
</html>