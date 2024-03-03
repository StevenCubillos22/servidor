<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

$nota1 = $_GET['n1'];

$nota = 7; // Puedes cambiar esta nota según necesites




if ($nota < 5) {
    echo "Insuficiente";
} elseif ($nota >= 5 && $nota < 7) {
    echo "Suficiente";
} elseif ($nota >= 7 && $nota < 9) {
    echo "Bien";
} elseif ($nota >= 9 && $nota < 10) {
    echo "Notable";
} else {
    echo "Sobresaliente";
}
?>

    
</body>
</html>