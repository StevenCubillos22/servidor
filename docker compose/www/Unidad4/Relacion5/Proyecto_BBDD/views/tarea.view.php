<?php
require_once '../funciones.php'; 
require_once '../config.php';
session_start();

?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>GestiTareas</title>
</head>
<body>
    <h2>GestiTareas</h2><br>
    <p>Crea, edita y modifica tareas con un solo clic</p>
    <hr>

<?php

if (isset($_SESSION["id"])) {
    echo "Muy buenas usuario Nº " . $_SESSION["id"] . "<br>";

    if (isset($_REQUEST["action"])) {
        $action = $_REQUEST["action"];
    } else {
        $action = "mostrarListaTareas";  // Acción por defecto que se realiza
    }
    
    
    if ($action == "formularioInsertarTareas") {
        formularioInsertarTareas($db);
    }
    if ($action == "insertarTarea") {
        insertarTarea($db);
    }
    if ($action == "borrarTarea") {
        borrarTarea($db);
    }
    if ($action == "formularioModificarTarea") {
        formularioModificarTarea($db);
    }
    if ($action == "modificarTarea") {
        modificarTarea($db);
    }

    if ($action == "mostrarListaTareas") {
        mostrarListaTareas($db);
    }

}

?>
<hr>
<?php
echo "<p>¿Deseas salir? <a href='../cerrarsesion.php'>Cerrar Sesión</a></p>";
?>
</body>
</html>