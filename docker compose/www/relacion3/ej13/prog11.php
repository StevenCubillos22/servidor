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

// Ordenar los números de menor a mayor
if (($num1 % 2) == 0) {
    echo " Es par!";
} else {
    echo "Es impar!";
}


if (($num1 % 5) == 0) {
    echo " Es divisible entre 5!";
} else {
    echo "No es divisible entre 5!";
}


?>

</body>
</html>