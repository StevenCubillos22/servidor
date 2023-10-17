<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $numero1 = $_POST["numero1"];
    $numero2 = $_POST["numero2"];
    $numero3 = $_POST["numero3"];
    $numero4 = $_POST["numero4"];

    // Encontramos con esto el máximo y el mínimo
    $maximo = max($numero1, $numero2, $numero3, $numero4);
    $minimo = min($numero1, $numero2, $numero3, $numero4);

    // Mostrará los números con máximo y mínimo
    echo "Número 1: $numero1 <br>";
    echo "Número 2: $numero2 <br>";
    echo "Número 3: $numero3 <br>";
    echo "Número 4: $numero4 <br>";
    echo "MÁXIMO: $maximo <br>";
    echo "MÍNIMO: $minimo <br>";
}
?>

    
</body>
</html>