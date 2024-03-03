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


for ($i = 0; $i < 100; $i++) {
    $numeros[$i] = $i;
}


for ($i = 1; $i < 100; $i++) { 
    if ($numeros[$i] % 3 == 0) {
        echo "Fizz<br>";
    } else if ($numeros[$i] % 5 == 0){
        echo "Buzz<br>";
    } else if (($numeros[$i] % 5 == 0)&&($numeros[$i] % 3 == 0)){
        echo "FizzBuzz<br>";
    } else {
        echo" ".$numeros[$i]." <br>";
    }
}

?>
    
</body>
</html>