<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    
    $numeros = array();

    //Genera array
    for ($i = 0; $i < 100; $i++) {
    $numeros[$i] = rand(0, 20);
    echo $numeros[$i]." - ";
    }

    //Hacemos un bucle for si el num1 es el 2, lo cambiamos por este
    for ($i=0; $i < 100; $i++){
        if ($numeros[$i] == $num1) {
            $num1 = $num2;
        }
    }

    echo "<br><br>Lista modificada: ";
    echo "<br>";
    echo "<br>";

    for ($i=0; $i <100; $i++ ){
        if ($numeros[$i] == $num2){
            echo "<b>".$num2."</b> - ";
        } else {
            echo $numeros[$i]." - ";
        }

    }


?>
</body>
</html>