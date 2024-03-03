<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>


<?php

if(isset($_GET['n1'])) { //con 
    $num1 = $_GET['n1'];
    $numeros = 0;
    $suma = 0;

    while ($num1 >= 0) {
        $numeros++;
        $suma += $num1;
        // Leer el siguiente número
        $num1 = $_GET['n1'];
    }

    if ($numeros < 0) {
        $media = $suma / $numeros;
        
        echo "La media de los numeros que has introducido son " . $media . " ";
    }
}


?>






    
</body>
</html>

