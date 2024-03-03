<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pirámide Invertida</title>
</head>
<body>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $caracter = $_POST["caracter"];

    // Imprimir la pirámide invertida
    for ($i = 5; $i >= 1; $i--) {
        for ($j = 1; $j <= $i; $j++) {
            echo $caracter;
        }
        echo "<br>";
    }
}
?>

</body>
</html>
