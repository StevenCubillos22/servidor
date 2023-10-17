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

$primerNum=0;

if ($num1 < 10) {
    $primerNum= $num1;
} 


if (( $num1 >= 10 ) && ( $num1 < 100 )) {
    $primerNum= ($num1 / 10);
}

if (( $num1 >= 100 ) && ( $num1 < 1000 )) {
    $primerNum= ($num1 / 100);
    }

    if (( $num1 >= 1000 ) && ( $num1 < 10000 )) {
        $primerNum= ($num1 / 1000);
    }

    if ( $num1 >= 10000 ) {
        $primerNum= ($num1 / 10000);
    }



echo "La última cifra del numero que introduciste es".$primerNum." ";


?>

</body>
</html>