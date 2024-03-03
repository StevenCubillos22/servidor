<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Vista de su nombre y apellidos</title>
</head>
<body>
    <h1>Nombre y apellidos</h1>
    <hr>
    <?php
    if(isset($_SESSION['nombre']) && isset($_SESSION['apellidos'])){
        echo "Nombre: " . $_SESSION['nombre'] . "<br>";
        echo "Apellidos: " . $_SESSION['apellidos'];
    } else {
        echo "No hay  nombre y apellidos aún en nuestra base de datos :((.";
    }
    ?>
</body>
</html>