<?php
session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Escribe su nombre</h1><hr>
    <?php
    if(isset($_SESSION['nombre'])){
        echo "Su nombre ya está escrito en nuestra base:  " . $_SESSION['nombre'];
    }
    ?>
    <form action="nombre-2.php" method="post">
        Nombre: <input type="text" name="nombre">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>