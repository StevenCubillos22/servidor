<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];



if ($numero1!=$numero2){

    $primero= min($numero1,$numero2);
    $ultimo= max($numero1,$numero2);

    echo "Numeros comprendidos entre ".$numero1." y ".$numero2." <br>";

    while ($primero <= $ultimo) {

        echo $primero. "<br>";
        $primero += 7;

    } 

} else {
    echo "<p>No has introducido dos numeros distintos</p>";
}


?>
    
</body>
</html>
