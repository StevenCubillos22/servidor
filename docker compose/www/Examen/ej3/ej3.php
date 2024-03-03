<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio de examen</title>
</head>
<body>
<?php

$num1 = $_POST["numero1"];



if (($num1 > 1) && ($num1 < 1000)){

    $numeros = array();
        for ($i = 0; $i < $num1; $i++) {
        $numeros[$i] = $i;
    }

    for ($i=2; $i<count($numeros); $i++){
        if ((count($numeros) % $i) == 0) {
          echo "".$numeros[$i]." NO es primo<br> ";
        } else {
          echo " ".$numeros[$i]." SI es primo<br>";
        }
      }


} else if (($num1 > 1000) || ($num1 < 1)) {
    echo "<h2>Lo sentimos, se ha producido un error por pantalla :(</h2>";
 
  }


?>
    
</body>
</html>