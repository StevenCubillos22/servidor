<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    
    $numeros = array();
    $par=0;
    $impar=0;

    //Genera array
    for ($i = 0; $i < 25; $i++) {
    $numeros[$i] = rand(0, 80);
    echo $numeros[$i]." - ";
    }

    //Hacemos un bucle for si el num1 es el 2, lo cambiamos por este

    $maximo = max($numeros);
    $minimo = min($numeros);



    echo "<br>MAYOR - - >: $maximo <br>";
    echo "<br>MENOR - - >: $minimo <br>";
  
    


?>
</body>
</html>