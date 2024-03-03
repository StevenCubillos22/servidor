<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar Sesión</title>

</head>
<body>
    <form action="index.php?action=comprobarRegistro" method="post">

    <input type="text" name="usuario" placeholder="Usuario">
    <input type="password" name="password" placeholder="Contraseña">
    <input type="password" name="password2" placeholder="Repite Contraseña">
    <input type="submit" value="Aceptar">  
    </form>

    <p>¿Tienes ya una cuenta?</p>
    <a href="login.php">Inicia sesión</a>
</body>
</html>