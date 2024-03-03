<?php
session_start();

if (isset($_POST['nombre']) && !empty($_POST['nombre'])) {
    $_SESSION['nombre'] = $_POST['nombre'];
    header("Location: index.html");
    exit(); // Añade exit() para garantizar que el script se detenga después de la redirección
} else {
    header("Location: nombre-1.php?error=1");
     
}
?>