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

do {
    $num1 = (int)($num1 / 10);
    $numeros++;
  } while ($num1 > 0);

  echo "El número ingresado tiene " . $numeros . " numeros.";
}


?>

</body>
</html>
