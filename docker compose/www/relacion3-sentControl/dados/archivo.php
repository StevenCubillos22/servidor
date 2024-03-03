<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php

$tirada = rand(1,6);
$tirada2 = rand(1,6);


echo '<img src="./imgs/'.$tirada.'.svg"/>';
echo '<img src="./imgs/'.$tirada2.'.svg"/>';

$total = $tirada + $tirada2;
echo '<h3>La tirada total es de '.$total.'</h3>';

if ($tirada > $tirada2){
    echo 'El ganador es el jugador 1';
} else if ($tirada < $tirada2) {
    echo 'El ganador es el jugador 2';
} else {
    echo 'tenemos un empate o.ò';
}
?>
    
</body>
</html>