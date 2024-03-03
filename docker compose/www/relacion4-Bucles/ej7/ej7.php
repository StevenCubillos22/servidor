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
$intentosTotal
$intentos=4;
$encontrada=false;


  do {

    if ($num1==9889){
        $encontrada=true;

    } else {
        echo "Lo siento, esta combinacion no es correcta";
    }

    $intentos--;
    
} while ((!$encontrada) && ($intentos>0)); 


if ($encontrada){
    echo "<b>Enhorabuena, has abierto la caja fuerte</b>";

} else {

    echo "Las 4 oportunidades se han agotado, lo siento mucho";
    
}

?>
    
</body>
</html>