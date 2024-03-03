<div class="principal">
        <h2>Registro</h2>
        <div class="contenido">
            <form action="index.php?action=comprobarRegistro" method="post">
                <label>Usuario: </label><br><input type="text" name="usuario" id="usuario" required><br><br>
                <label>Contraseña: </label><br><input type="password" name="password" id="password" required><br><br>
                <label>Repita la contraseña: </label><br><input type="password" name="password2" id="password2" required><br><br>
                <button type="submit">Guardar cambios</button>
            </form><br>
            <p>¿Tienes una cuenta? <a href="index.php?action=login">Iniciar sesión</a></p>
        </div>
    </div> 