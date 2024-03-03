<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Iniciar Sesión</title>
</head>
<body>
<h2>Iniciar Sesión</h2>
    <form action="index.php?action=comprobarLogin" method="post" >
        <label for="usuario">Usuario:</label> <!-- Corregir el nombre del campo -->
        <input type="text" name="usuario" id="usuario" required><br>
        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" required><br>
      <!-- <input type="text" hidden name="action" value="mostrarListaTareas"> --> 
        <button type="submit">Iniciar sesión</button>
    </form>
</body>
</html>