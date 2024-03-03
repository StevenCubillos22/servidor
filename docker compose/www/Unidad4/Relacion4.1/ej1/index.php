<?php
/**
 * En esta página se encuentra el código de la landing page del sitio. Se mostrará un enlace para iniciar sesión.
 * Modifica esta página y pon tu contenido.
 * 
 * Autor: Nombre Apellidos
 * 
 */
echo "<h1>Pantalla inicio</h1>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    

<a href="login.php">Iniciar Sesión</a><br>

<p>¿Aún no tienes cuenta?</p>
    <a href = "views/registro.view.php"><button>sign up</button></a>
    <hr />
    <p>Ir al contenido </p>
    <a href = "contenido.php"><button>contenido</button></a>
    <hr />
    <p>¿Deseas cerrar sesión?</p>
    <a href = "cerrarsesion.php"><button>sign out</button></a>


</body>
</html>
