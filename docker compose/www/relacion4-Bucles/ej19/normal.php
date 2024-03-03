<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Pirámide Normal</title>
</head>
<body>
    <form action="procesar.php" method="post">
        <label for="caracter">Ingrese un carácter: </label>
        <input type="text" id="caracter" name="caracter">
        <button type="submit">Generar Pirámide</button>
    </form>


    <?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $caracter = $_POST["caracter"];

    // Imprimir la pirámide normal
    for ($i = 1; $i <= 5; $i++) {
        // Espacios en blanco
        for ($j = 5 - $i; $j > 0; $j--) {
            echo "&nbsp;&nbsp;";
        }
        // Caracteres del pirámide
        for ($k = 1; $k <= 2 * $i - 1; $k++) {
            echo $caracter;
        }
        echo "<br>";
    }
}
?>

</body>
</html>