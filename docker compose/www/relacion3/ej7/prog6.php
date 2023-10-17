<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$nota1 = $_GET['n1'];
$nota2 = $_GET['n2'];
$nota3 = $_GET['n3'];

$nota1 = 7;
$nota2 = 8;
$nota3 = 6;

$media = ($nota1 + $nota2 + $nota3) / 3;
echo "La media de las tres notas es: " . $media;
?>


    
</body>
</html>