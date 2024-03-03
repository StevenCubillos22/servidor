<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$dia = $_GET['n1'];
$mes = $_GET['n2'];


if (($mes == 3 && $dia >= 21) || ($mes == 4 && $dia <= 19)) {
    echo "Aries";
} elseif (($mes == 4 && $dia >= 20) || ($mes == 5 && $dia <= 20)) {
    echo "Tauro";
} elseif (($mes == 5 && $dia >= 21) || ($mes == 6 && $dia <= 20)) {
    echo "Géminis";
} elseif (($mes == 6 && $dia >= 21) || ($mes == 7 && $dia <= 22)) {
    echo "Cancer";
} elseif (($mes == 7 && $dia >= 23) || ($mes == 8 && $dia <= 22)) {
    echo "Leo";
} elseif (($mes == 8 && $dia >= 23) || ($mes == 9 && $dia <= 22)) {
    echo "Virgo";
} elseif (($mes == 9 && $dia >= 23) || ($mes == 10 && $dia <= 22)) {
    echo "Libra";
} elseif (($mes == 10 && $dia >= 23) || ($mes == 11 && $dia <= 21)) {
    echo "Escorpio";
} elseif (($mes == 11 && $dia >= 22) || ($mes == 12 && $dia <= 21)) {
    echo "Sagitario";
} elseif (($mes == 12 && $dia >= 21) || ($mes == 1 && $dia <= 19)) {
    echo "Capricornio";
} elseif (($mes == 1 && $dia >= 20) || ($mes == 2 && $dia <= 18)) {
    echo "Acuario";
} elseif (($mes == 2 && $dia >= 19) || ($mes == 3 && $dia <= 20)) {
    echo "Piscis";
} 


?>

    
</body>
</html>