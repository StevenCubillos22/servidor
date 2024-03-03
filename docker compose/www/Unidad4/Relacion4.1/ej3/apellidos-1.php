<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Escribir sus apellidos</title>
</head>
<body>
    <h1>Escriba sus apellidos</h1><hr>
    <?php  
    if(isset($_SESSION['apellidos'])){
        echo "Sus apellidos están disponibles tal como lo escribistes: " . $_SESSION['apellidos'];
    }
    ?>
    <form action="apellidos-2.php" method="post">
        Apellidos: <input type="text" name="apellidos">
        <input type="submit" value="Enviar">
    </form>
</body>
</html>