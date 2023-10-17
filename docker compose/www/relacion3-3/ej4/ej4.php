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

    for ($i = 0; $i < 100; $i++) {
    $numeros[$i] = rand(0, 60);
    echo $numeros[$i]." - ";
    }


    foreach ($numeros as $losdelForeach1 ){
        if ($numeros == $num1) {
            $numeros == $num2;
        }
    }

    echo "<br><br>Lista modificada: ";
    echo "<br>";

    foreach ($numeros as $losdelForeach2 ){

        if ($numeros == $num2){
            echo "<b>".$num2."</b>";
        } else {
            echo $losdelForeach2." - ";
        }

    }


?>
</body>
</html>