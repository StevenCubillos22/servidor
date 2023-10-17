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

$numeros=0;

if ($num1 < 10) {
    $numeros= 1;
} 


if (( $num1 >= 10 ) && ( $num1 < 100 )) {
    $numeros= 2;
}

if (( $num1 >= 100 ) && ( $num1 < 1000 )) {
    $numeros= 3;
    }

    if (( $num1 >= 1000 ) && ( $num1 < 10000 )) {
        $numeros= 4;
    }

    if ( $num1 >= 10000 ) {
        $numeros= 5;
    }



echo "La última cifra del numero que introduciste es".$numeros." ";


?>

</body>
</html>