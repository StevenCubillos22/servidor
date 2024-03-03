<?php
/**
 * En esta página se encuentra el código que crea el usuario. Por ahora no se hace la conexión a BD, simplemente si el usuario introducido en el formulario 
 * es test/test se redirige a la página de login. En otro caso se indicará que el usuario es incorrecto.
 *  
 * Al recuperar la password automáticamente se le aplicará un cifrado sha512.
 * 
 * Autor: Nombre Apellidos
 * 
 */


 session_start();

if (isset($_POST["username-sign-up"]) && isset($_POST["password-sign-up"]) && isset($_POST["password2-sign-up"])) {
    $_SESSION["username-sign-up"] = $_POST["username-sign-up"];
    $_SESSION["password-sign-up"] = $_POST["password-sign-up"];
    $_SESSION["password2-sign-up"] = $_POST["password2-sign-up"];

    $hashed_password_sign_up = hash("sha512", $_SESSION["password-sign-up"]);
    $hashed_password2_sign_up = hash("sha512", $_SESSION["password2-sign-up"]);

    if ($hashed_password_sign_up !== $hashed_password2_sign_up) { // Compara si la contraseña y su confirmación son diferentes.
        echo "
            <p>Las contraseñas no coinciden</p>
            <br />
            <a href=\"views/registro.view.php\"><button>Intentarlo de nuevo</button></a>
        ";
    } else {
        if ($_SESSION["username-sign-up"] === "test" && hash("sha512", "test") === $hashed_password_sign_up) { // Compara si el nombre de usuario es "test" y la contraseña coincide con la contraseña hasheada de "test".
            echo " 
                <p>El usuario ya existe</p>
                <a href=\"views/login.view.php\"><button>Login</button></a>
            ";
            session_destroy();
        } else {
            echo "
                <p>Usuario inválido</p>
                <a href=\"views/registro.view.php\"><button>Intentarlo de nuevo</button></a>
            ";
        }
    }
}
?>